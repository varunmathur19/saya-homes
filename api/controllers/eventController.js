const path = require('path');
const fs = require('fs');
const multer = require('multer');
const { 
    addEvents, 
    getAllEvents, 
    updateEventsStatus, 
    getEventsById, 
    deleteEventsFromDB, 
    getImagePathById, getEventsBySlug, getAllRecentEvents,
    updateEvent
} = require('../model/eventsModel');

// Setup local storage for multer
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
      const uploadDir = path.join(__dirname, '../uploads/events'); // Define local upload directory
      if (!fs.existsSync(uploadDir)) {
        fs.mkdirSync(uploadDir, { recursive: true });
      }
      cb(null, uploadDir); // Store images in 'uploads/Events' directory
    },
    filename: (req, file, cb) => {
      cb(null, `${Date.now()}-${file.originalname}`); // Unique file name with timestamp
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


// Add Event
// controllers/Events.js
const createEvent = async (req, res) => {
    try {
      upload.single('image')(req, res, async (err) => {
        if (err) return res.status(400).send(err.message);
  
        const fileName = req.file ? req.file.filename : null; // Get the file name
  
        if (!fileName) {
          return res.status(400).json({ success: false, message: 'No file uploaded' });
        }
  
        try {
          // Construct the file path
          const ev_image = `/uploads/Events/${fileName}`; // Relative path to the image
  
          // Add Event to database
          const {
            ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_date, ev_status, ev_created
          } = req.body;
          const ev_group = createSlug(ev_title);
  
          const result = await addEvents(ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created);
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

//get all Events
const getEvents = async (req, res) => {
    try{
        const results = await getAllEvents();
        res.status(200).json(results);
    } catch (error) {
        res.status(500).json({success: false, message: error.message});
    }
};

const getRecentEvents = async (req, res) => {
  try{
      const results = await getAllRecentEvents();
      res.status(200).json(results);
  } catch (error) {
      res.status(500).json({success: false, message: error.message});
  }
};


//get Event by ID
const getEventById = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({success: false, message: 'Invalid ID'});

    try {
        const result = await getEventsById(id);
        res.status(200).json({ success: true, data: result });
    } catch (err) {
        res.status(500).json({ success: false, message: err.message });
      }
};

//get Event by ID
const getEventBySlugURL = async (req, res) => {
  const slugURL = req.params
  console.log(slugURL);
  try {
      const result = await getEventsBySlug(slugURL);
      res.status(200).json({ success: true, data: result });
  } catch (err) {
      res.status(500).json({ success: false, message: err.message });
    }
};

// Update Event status
const updateEventstatus = async (req, res) => {
    const { id, status } = req.body;
    if (id === undefined || status === undefined) return res.status(400).json({ success: false, message: 'Invalid request: id and status are required' });
  
    try {
      const result = await updateEventsStatus(id, status);
      res.status(200).json({ success: true, result });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
};

// Delete Event
const deleteEvent = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });
  
    try {
      const imagePath = await getImagePathById(id);
      if (imagePath && fs.existsSync(path.join(__dirname, `../${imagePath}`))) {
        fs.unlinkSync(path.join(__dirname, `../${imagePath}`)); // Delete the image from local storage
      }
  
      await deleteEventsFromDB(id);
      res.status(200).json({ success: true, message: 'Event deleted successfully' });
    } catch (error) {
      res.status(500).json({ success: false, message: error.message });
    }
  };

// Update our team entry
const updateEvents = async (req, res) => {
    const id = parseInt(req.params.id, 10);
    if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });
  
    upload.single('image')(req, res, async (err) => {
      if (err) return res.status(400).send(err.message);
  
      const {
        ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_date, ev_status
      } = req.body;
      const ev_group = createSlug(ev_title);
  
      const newFileName = req.file ? req.file.filename : null;
      let ev_image = null;  // Initially set to null
  
      try {
        // Get the current image path from the database
        const oldImagePath = await getImagePathById(id);
  
        if (newFileName) {
          // New image is uploaded, save the file name and delete the old image
          ev_image = `/uploads/Events/${newFileName}`;
  
          // Delete the old image from the file system
          if (oldImagePath && fs.existsSync(path.join(__dirname, `../${oldImagePath}`))) {
            fs.unlinkSync(path.join(__dirname, `../${oldImagePath}`));
          }
        } else {
          // Keep the old image if no new image is uploaded
          ev_image = oldImagePath;
        }
  
        // Update the Event entry in the database
        const result = await updateEvent(
          id,
          ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status
        );
  
        res.json({ message: 'Data updated successfully', affectedRows: result.affectedRows });
      } catch (error) {
        console.error('Update Error:', error);
        res.status(500).json({ message: 'Failed to update data', error: error.message });
      }
    });
  };
  


module.exports = {
    createEvent, 
    getEvents, getEventById, getEventBySlugURL, getRecentEvents, updateEventstatus, deleteEvent, updateEvents, 
    upload,
}