const path = require('path');
const fs = require('fs');
const multer = require('multer');
const { 
    addBlogs, 
    getAllBlogs, 
    updateBlogsStatus, 
    getBlogsById, 
    deleteBlogFromDB, 
    getImagePathById, getBlogsBySlug, getAllRecentBlogs,
    updateBlog 
} = require('../model/blogModel');

const storage = multer.diskStorage({
    destination: (req, file, cb) => {
      const uploadPath = path.join(__dirname, '../uploads/blog-images'); // Define local path for blog uploads
      fs.mkdirSync(uploadPath, { recursive: true }); // Ensure directory exists
      cb(null, uploadPath);
    },
    filename: (req, file, cb) => {
      const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
      cb(null, uniqueSuffix + '-' + file.originalname); // Create a unique filename
    }
  });
  
  const upload = multer({ storage: storage });
  

// Utility function to create a URL slug
const createSlug = (text) => {
  return text
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/\s+/g, '-')
    .replace(/-+/g, '-')
    .replace(/^-+|-+$/g, '');
};


// Add blog
// controllers/blogs.js
const createBlog = async (req, res) => {
    try {
      upload.single('image')(req, res, async (err) => {
        if (err) return res.status(400).send(err.message);
  
        const tempFilePath = req.file ? req.file.path : null;
  
        if (!tempFilePath) {
          return res.status(400).json({ success: false, message: 'No file uploaded' });
        }
  
        try {
          // No Cloudinary upload needed, use local path
          const image = tempFilePath;
  
          // Add blog to database
          const {
            blogstypes, meta_title, meta_desc, meta_key, heading, content, bl_type, bl_link, image_title, news_state, date, created
          } = req.body;
          const slugurl = createSlug(heading);
  
          const result = await addBlogs(blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, date, created);
          res.status(201).json({ success: true, result });
        } catch (dbError) {
          console.error('Database Error:', dbError);
          res.status(500).json({ success: false, message: 'Database Error: ' + dbError.message });
        }
      });
    } catch (error) {
      console.error('Server Error:', error);
      res.status(500).json({ success: false, message: 'Server Error: ' + error.message });
    }
  };
  

//get all blogs
const getBlogs = async (req, res) => {
    try{
        const results = await getAllBlogs();
        res.status(200).json(results);
    } catch (error) {
        res.status(500).json({success: false, message: error.message});
    }
};

const getRecentBlogs = async (req, res) => {
  try{
      const results = await getAllRecentBlogs();
      res.status(200).json(results);
  } catch (error) {
      res.status(500).json({success: false, message: error.message});
  }
};


//get blog by ID
const getBlogById = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({success: false, message: 'Invalid ID'});

    try {
        const result = await getBlogsById(id);
        res.status(200).json({ success: true, data: result });
    } catch (err) {
        res.status(500).json({ success: false, message: err.message });
      }
};

//get blog by ID
const getBlogBySlugURL = async (req, res) => {
  const slugURL = req.params
  console.log(slugURL);
  try {
      const result = await getBlogsBySlug(slugURL);
      res.status(200).json({ success: true, data: result });
  } catch (err) {
      res.status(500).json({ success: false, message: err.message });
    }
};

// Update blog status
const updateBlogStatus = async (req, res) => {
    const { id, status } = req.body;
    if (id === undefined || status === undefined) return res.status(400).json({ success: false, message: 'Invalid request: id and status are required' });
  
    try {
      const result = await updateBlogsStatus(id, status);
      res.status(200).json({ success: true, result });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
};

// Delete blog
const deleteBlog = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });
  
    try {
      const imagePath = await getImagePathById(id); // Get the local image path from the database
      if (imagePath) {
        fs.unlink(imagePath, (err) => {
          if (err) console.error('Failed to delete image file:', err);
        });
      }
  
      await deleteBlogFromDB(id);
      res.status(200).json({ success: true, message: 'Blog deleted successfully' });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
  };
  

// Update our team entry
const updateBlogs = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });
  
    upload.single('image')(req, res, async (err) => {
      if (err) return res.status(400).send(err.message);
  
      const {
        blogstypes, meta_title, meta_desc, meta_key, heading, content, bl_type, bl_link, image_title, news_state, date
      } = req.body;
      const slugurl = createSlug(heading);
  
      const newImagePath = req.file ? req.file.path : null;
      let image = null;
  
      try {
        const oldImagePath = await getImagePathById(id);
  
        if (newImagePath) {
          image = newImagePath;
  
          // Remove old image if new one is uploaded and exists
          if (oldImagePath && oldImagePath !== image) {
            fs.unlink(oldImagePath, (err) => {
              if (err) console.error('Failed to delete old image:', err);
            });
          }
        } else {
          image = oldImagePath; // Keep old image if no new image is uploaded
        }
  
        const result = await updateBlog(
          id, blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, date
        );
  
        res.json({ message: 'Blog updated successfully', affectedRows: result.affectedRows });
      } catch (error) {
        console.error('Update Error:', error);
        res.status(500).json({ message: 'Failed to update blog', error: error.message });
      }
    });
  };
  


module.exports = {
    createBlog, 
    getBlogs, getBlogById, getBlogBySlugURL, getRecentBlogs, updateBlogStatus, deleteBlog, updateBlogs, 
    upload,
}