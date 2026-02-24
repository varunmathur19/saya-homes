
const {
    addProjectEnquiry,
    getAllProjectEnquiry,
    deleteProjectEnquiryFromDB
} = require('../model/projectEnquiryModel');


// Create new ProjectEnquiry entry
const createProjectEnquiry = async (req, res) => {
  try {
        
      const {
       
        name, email, mobile, message, projects, source, medium, campaign, created
      } = req.body;

      try {
        const result = await addProjectEnquiry(name, email, mobile, message, projects, source, medium, campaign, created);

        // await sendProjectEnquiryEmail(name, email, projectName, user_message);

        res.status(201).json({ success: true, result });
      } catch (dbError) {
        res.status(500).json({ success: false, message: dbError.message });
      }
    }
   catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};

// Get all ProjectEnquiry
const getProjectEnquiry = async (req, res) => {
  try {
    const results = await getAllProjectEnquiry();
    res.status(200).json(results);
  } catch (err) {
    res.status(500).json({ success: false, message: err.message });
  }
};

// Delete ProjectEnquiry
const deleteProjectEnquiry = async (req, res) => {
  const id = parseInt(req.params.id, 10);
  if (isNaN(id)) return res.status(400).json({ success: false, message: 'Invalid ID' });

  try {
     
    await deleteProjectEnquiryFromDB(id);
    res.status(200).json({ success: true, message: 'ProjectEnquiry deleted successfully' });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};


module.exports = {
  createProjectEnquiry,
  getProjectEnquiry,
  deleteProjectEnquiry
};
