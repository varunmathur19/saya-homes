const path = require('path');
const fs = require('fs');
const multer = require('multer');
const { 
  addMedias, 
  getAllMedias, 
  updateMediasStatus, 
  getMediasById, 
  deleteMediaFromDB, 
  getImagePathById, getMediasBySlug, getAllRecentMedias,
  // updateMedias 
} = require('../model/inMediaModel');

// Set up local storage with Multer
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    const uploadPath = path.join(__dirname, '../uploads/Medias');
    // Ensure the directory exists
    if (!fs.existsSync(uploadPath)) {
      fs.mkdirSync(uploadPath, { recursive: true });
    }
    cb(null, uploadPath);
  },
  filename: (req, file, cb) => {
    cb(null, Date.now() + path.extname(file.originalname)); // Use current timestamp + file extension
  },
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

// Add Media - Local Upload Version
const createMedia = async (req, res) => {
  try {
    upload.single('image')(req, res, async (err) => {
      if (err) return res.status(400).send(err.message);

      const fileName = req.file ? req.file.filename : null;

      if (!fileName) {
        return res.status(400).json({ success: false, message: 'No file uploaded' });
      }

      try {
        const {
          metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle, videoURL, paperName, paperURL
        } = req.body;

        // Add Media to the database with the image file name
        const result = await addMedias(
          metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle, videoURL, paperName, paperURL, fileName
        );

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

//get all Medias
const getMedias = async (req, res) => {
    try{
        const results = await getAllMedias();
        res.status(200).json(results);
    } catch (error) {
        res.status(500).json({success: false, message: error.message});
    }
};

const getRecentMedias = async (req, res) => {
  try{
      const results = await getAllRecentMedias();
      res.status(200).json(results);
  } catch (error) {
      res.status(500).json({success: false, message: error.message});
  }
};


//get Media by ID
const getMediaById = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({success: false, message: 'Invalid ID'});

    try {
        const result = await getMediasById(id);
        res.status(200).json({ success: true, data: result });
    } catch (err) {
        res.status(500).json({ success: false, message: err.message });
      }
};

//get Media by ID
const getMediaBySlugURL = async (req, res) => {
  const slugURL = req.params
  console.log(slugURL);
  try {
      const result = await getMediasBySlug(slugURL);
      res.status(200).json({ success: true, data: result });
  } catch (err) {
      res.status(500).json({ success: false, message: err.message });
    }
};

// Update Media status
const updateMediastatus = async (req, res) => {
    const { id, status } = req.body;
    if (id === undefined || status === undefined) return res.status(400).json({ success: false, message: 'Invalid request: id and status are required' });
  
    try {
      const result = await updateMediasStatus(id, status);
      res.status(200).json({ success: true, result });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
};

// Delete Media
const deleteMedia = async (req, res) => {
  const id = parseInt(req.params.id, 10);
  if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });

  try {
    const imagePath = await getImagePathById(id);
    if (imagePath) {
      // Remove the image from the local storage
      const filePath = path.join(__dirname, '../uploads/Medias', imagePath);
      if (fs.existsSync(filePath)) {
        fs.unlinkSync(filePath); // Delete the file
      }
    }

    await deleteMediaFromDB(id);
    res.status(200).json({ success: true, message: 'Media deleted successfully' });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};


// Update our team entry
const updateMedias = async (req, res) => {
  const id = parseInt(req.params.id, 10);
  if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });

  upload.single('image')(req, res, async (err) => {
    if (err) return res.status(400).send(err.message);

    const {
      metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle, videoURL, paperName, paperURL
    } = req.body;

    const newImagePath = req.file ? req.file.filename : null;
    let advertisementImage = null;

    try {
      // Get the current image path from the database
      const oldImagePath = await getImagePathById(id);

      if (newImagePath) {
        advertisementImage = newImagePath;

        // Remove the old image from the local storage if it exists
        if (oldImagePath) {
          const oldFilePath = path.join(__dirname, '../uploads/Medias', oldImagePath);
          if (fs.existsSync(oldFilePath)) {
            fs.unlinkSync(oldFilePath); // Delete the old image
          }
        }
      } else {
        advertisementImage = oldImagePath; // Keep the old image if no new image is provided
      }

      // Update the media entry in the database
      const result = await updateMedia(
        id, 
        metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle, videoURL, paperName, paperURL, advertisementImage
      );

      res.json({ message: 'Data updated successfully', affectedRows: result.affectedRows });
    } catch (error) {
      console.error('Update Error:', error);
      res.status(500).json({ message: 'Failed to update data', error: error.message });
    }
  });
};


module.exports = {
    createMedia, 
    getMedias, getMediaById, getMediaBySlugURL, getRecentMedias, updateMediastatus, deleteMedia, updateMedias, 
    upload,
}