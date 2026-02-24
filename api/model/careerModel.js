const db = require('../config/db');

//add Careers
const addCareers = (name, email, mobile, position, experience, resume, created) => {
    const query = 'INSERT INTO career (name, email, mobile, position, experience, resume, created) VALUES (?, ?, ?, ?, ?, ?, ?)';
    return new Promise((resolve, reject) => {
        db.query(query, [name, email, mobile, position, experience, resume, created], (err, results) => {
            if (err) {
                reject(err);
            } else {
                resolve(results.insertId);
            }
        });
    });
};

const getAllCareers = () => {
    const query = 'SELECT * FROM career';
    return new Promise((resolve, reject) => {
        db.query(query, (err, results) => {
            if (err) {
                console.error('Error executing query:', err); // Add logging here
                return reject(err);
            }
            resolve(results);
        });
    });
};

//delete a Career
const deleteCareerFromDB = (id) => {
    const query = 'DELETE FROM career WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};


module.exports = {
    addCareers, getAllCareers, deleteCareerFromDB
};