const db = require('../config/db');

// Create an entry in the project_enquires table
const addProjectEnquiry = (name, email, mobile, message, projects, source, medium, campaign, created) => {
  const query = 'INSERT INTO projct_enquires (name, email, mobile, message, projects, source, medium, campaign, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
  return new Promise((resolve, reject) => {
    db.query(query, [name, email, mobile, message, projects, source, medium, campaign, created], (err, results) => {
      if (err) {
        reject(err);
      } else {
        resolve(results.insertId);
      }
    });
  });
};

// Get all ProjectEnquirys
const getAllProjectEnquiry = () => {
  const query = 'SELECT * FROM projct_enquires';
  return new Promise((resolve, reject) => {
    db.query(query, (err, results) => {
      if (err) return reject(err);
      resolve(results);
    });
  });
};

// Delete a ProjectEnquiry by ID
const deleteProjectEnquiryFromDB = (id) => {
  const query = 'DELETE FROM projct_enquires WHERE id = ?';
  return new Promise((resolve, reject) => {
    db.query(query, [id], (err, results) => {
      if (err) return reject(err);
      resolve(results);
    });
  });
};


module.exports = {
  addProjectEnquiry,
  getAllProjectEnquiry,
  deleteProjectEnquiryFromDB
};
