const express = require('express');
const router = express.Router();
const {
    createCareer, 
    getCareers, 
    deleteCareer, 
} = require('../controllers/careerController');

// Route to add information and image upload
router.post('/upload', createCareer);

// Route to get all Career
router.get('/get', getCareers);

// Route to delete Career
router.delete('/delete/:id', deleteCareer);

module.exports = router;