const express = require('express');
const router = express.Router();
const {
    createMedia, 
    getMedias, 
    getMediaById, getMediaBySlugURL, getRecentMedias,
    updateMediastatus, 
    deleteMedia, 
    updateMedias, 
    upload
} = require('../controllers/inMediaController');

// Route to add information and image upload
router.post('/upload', createMedia);

// Route to get all Media
router.get('/get', getMedias);

// Route to get Media by ID
router.get('/getByID/:id', getMediaById);

// Route to get Media by ID
router.get('/getBySlug/:slugURL', getMediaBySlugURL);

// Route to get Media by ID
router.get('/getRecentMedias', getRecentMedias);

// Route to update Media status
router.patch('/updateStatus', updateMediastatus);


// Route to delete Media
router.delete('/delete/:id', deleteMedia);

// Route to update Media entry
router.put('/update/:id', updateMedias);

module.exports = router;