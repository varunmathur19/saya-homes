const express = require('express');
const router = express.Router();
const {
    createEvent, 
    getEvents, 
    getEventById, getEventBySlugURL, getRecentEvents,
    updateEventstatus, 
    deleteEvent, 
    updateEvents, 
    upload
} = require('../controllers/eventController');

// Route to add information and image upload
router.post('/upload', createEvent);

// Route to get all Event
router.get('/get', getEvents);

// Route to get Event by ID
router.get('/getByID/:id', getEventById);

// Route to get Event by ID
router.get('/getBySlug/:slugURL', getEventBySlugURL);

// Route to get Event by ID
router.get('/getRecentEvents', getRecentEvents);

// Route to update Event status
router.patch('/updateStatus', updateEventstatus);


// Route to delete Event
router.delete('/delete/:id', deleteEvent);

// Route to update Event entry
router.put('/update/:id', updateEvents);

module.exports = router;