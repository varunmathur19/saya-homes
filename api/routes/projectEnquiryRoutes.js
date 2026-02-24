const express = require('express');
const router = express.Router();
const {
    createProjectEnquiry,
    getProjectEnquiry,
    deleteProjectEnquiry,
} = require('../controllers/projectEnquiryController');

// Route to add information
router.post('/upload', createProjectEnquiry);

// Route to get all projectEnquiry
router.get('/get', getProjectEnquiry);

// Route to delete projectEnquiry
router.delete('/delete/:id', deleteProjectEnquiry);

module.exports = router;
