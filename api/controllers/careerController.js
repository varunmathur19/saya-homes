const path = require('path');
const fs = require('fs');
const multer = require('multer');
const { 
    addCareers, 
    getAllCareers,
    deleteCareerFromDB 
 } = require('../model/careerModel');

const storage = multer.diskStorage({
    destination: (req, file, cb) => {
      const uploadPath = path.join(__dirname, '../uploads/Careers'); // Define local path for Career uploads
      fs.mkdirSync(uploadPath, { recursive: true }); // Ensure directory exists
      cb(null, uploadPath);
    },
    filename: (req, file, cb) => {
      const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
      cb(null, uniqueSuffix + '-' + file.originalname); // Create a unique filename
    }
  });
  
  const upload = multer({ storage: storage });
  


// Add Career
// controllers/Careers.js
const createCareer = async (req, res) => {
    try {
      upload.single('resume')(req, res, async (err) => {
        if (err) return res.status(400).send(err.message);
  
        const tempFilePath = req.file ? req.file.path : null;
  
        if (!tempFilePath) {
          return res.status(400).json({ success: false, message: 'No file uploaded' });
        }
  
        try {
          // No Cloudinary upload needed, use local path
          const resume = tempFilePath;
  
          // Add Career to database
          const {
            name, email, mobile, position, experience, created
          } = req.body;
  
          const result = await addCareers(name, email, mobile, position, experience, resume, created);
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
  

//get all Careers
const getCareers = async (req, res) => {
    try{
        const results = await getAllCareers();
        res.status(200).json(results);
    } catch (error) {
        res.status(500).json({success: false, message: error.message});
    }
};

// Delete Career
const deleteCareer = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });
  
    try {
      const imagePath = await getImagePathById(id); // Get the local image path from the database
      if (imagePath) {
        fs.unlink(imagePath, (err) => {
          if (err) console.error('Failed to delete image file:', err);
        });
      }
  
      await deleteCareerFromDB(id);
      res.status(200).json({ success: true, message: 'Career deleted successfully' });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
  };



module.exports = {
    createCareer, 
    getCareers, deleteCareer
}