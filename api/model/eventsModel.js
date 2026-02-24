const db = require('../config/db');

//add Events
const addEvents = ( ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created ) => {
    const query = 'INSERT INTO events ( ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
    return new Promise((resolve, reject) => {
        db.query(query, [ ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created ], (err, results) => {
            if (err) {
                reject(err);
            } else {
                resolve(results.insertId);
            }
        });
    });
};

const getAllEvents = () => {
    const query = 'SELECT * FROM events';
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

//update Events status
const updateEventsStatus = (id, status) => {
    const query = 'UPDATE events SET status = ? WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [status, id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get Events by ID
const getEventsById = (id) => {
    console.log(id)
    const query = 'SELECT * FROM events_gallery WHERE events_id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('events not found')); 
            resolve(results);
        });
    });
};

const getEventsBySlug = (slugURL) => {
    console.log(slugURL.slugURL)
    const query = 'SELECT * FROM events WHERE ev_group = ?';
    
    return new Promise((resolve, reject) => {
        db.query(query, [slugURL.slugURL], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('events not found')); 
            resolve(results[0]);
        });
    });
};

const getAllRecentEvents = () => {
    const query = 'SELECT * FROM events ORDER BY ev_created DESC';
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



//delete a events
const deleteEventsFromDB = (id) => {
    const query = 'DELETE FROM events WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get image path by ID
const getImagePathById = (id) => {
    const query = 'SELECT ev_image FROM events WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('events not found'));
            resolve(results[0].image_path);
        });
    });
};

//update events
const updateEvent = (id,  ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created,) => {
    const query = 'UPDATE Events SET ev_meta_title = ?, ev_meta_desc = ?, ev_meta_key = ?, ev_title = ?, ev_group = ?, ev_image = ?, ev_date = ?, ev_status = ?, ev_created = ? WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [ ev_meta_title, ev_meta_desc, ev_meta_key, ev_title, ev_group, ev_image, ev_date, ev_status, ev_created, id], (err, result) => {
            if (err) return reject(err);
            resolve(result);
        });
    });
};

module.exports = {
    addEvents, getAllEvents, updateEventsStatus, getAllRecentEvents, getEventsById, getEventsBySlug, deleteEventsFromDB, getImagePathById, updateEvent
};