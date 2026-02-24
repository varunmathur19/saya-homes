
const {
    addCustomerSupport,
    getAllCustomerSupport,
    deleteCustomerSupportFromDB
} = require('../model/customerSupportModel');


// Create new CustomerSupport entry
const createCustomerSupport = async (req, res) => {
  try {
        
      const {
       
        name, email, mobile, project_name, city, state, comments, query_nature, created
      } = req.body;

      try {
        const result = await addCustomerSupport(name, email, mobile, project_name, city, state, comments, query_nature, created);

        // await sendCustomerSupportEmail(name, email, projectName, user_message);

        res.status(201).json({ success: true, result });
      } catch (dbError) {
        res.status(500).json({ success: false, message: dbError.message });
      }
    }
   catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};

// Get all CustomerSupport
const getCustomerSupport = async (req, res) => {
  try {
    const results = await getAllCustomerSupport();
    res.status(200).json(results);
  } catch (err) {
    res.status(500).json({ success: false, message: err.message });
  }
};

// Delete CustomerSupport
const deleteCustomerSupport = async (req, res) => {
  const id = parseInt(req.params.id, 10);
  if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });

  try {
     
    await deleteCustomerSupportFromDB(id);
    res.status(200).json({ success: true, message: 'CustomerSupport deleted successfully' });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};


module.exports = {
  createCustomerSupport,
  getCustomerSupport,
  deleteCustomerSupport
};
