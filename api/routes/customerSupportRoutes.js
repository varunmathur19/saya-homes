const express = require('express');
const router = express.Router();
const {
    createCustomerSupport,
    getCustomerSupport,
    deleteCustomerSupport,
} = require('../controllers/customerSupportController');

// Route to add information
router.post('/upload', createCustomerSupport);

// Route to get all CustomerSupport
router.get('/get', getCustomerSupport);

// Route to delete CustomerSupport
router.delete('/delete/:id', deleteCustomerSupport);

module.exports = router;
