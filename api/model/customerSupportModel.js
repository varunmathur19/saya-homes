const db = require('../config/db');

// Create an entry in the contact_us table
const addCustomerSupport = (name, email, mobile, project_name, city, state, comments, query_nature, created) => {
  const query = 'INSERT INTO contact_us (name, email, mobile, project_name, city, state, comments, query_nature, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
  return new Promise((resolve, reject) => {
    db.query(query, [name, email, mobile, project_name, city, state, comments, query_nature, created], (err, results) => {
      if (err) {
        reject(err);
      } else {
        resolve(results.insertId);
      }
    });
  });
};

// Get all CustomerSupports
const getAllCustomerSupport = () => {
  const query = 'SELECT * FROM contact_us';
  return new Promise((resolve, reject) => {
    db.query(query, (err, results) => {
      if (err) return reject(err);
      resolve(results);
    });
  });
};

// Delete a CustomerSupport by ID
const deleteCustomerSupportFromDB = (id) => {
  const query = 'DELETE FROM contact_us WHERE id = ?';
  return new Promise((resolve, reject) => {
    db.query(query, [id], (err, results) => {
      if (err) return reject(err);
      resolve(results);
    });
  });
};


module.exports = {
  addCustomerSupport,
  getAllCustomerSupport,
  deleteCustomerSupportFromDB
};
