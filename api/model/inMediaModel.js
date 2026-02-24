const db = require('../config/db');

//add Medias
const addMedias = ( metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle,videoURL, paperName, paperURL, advertisementImage, created_at) => {
    const query = 'INSERT INTO in_the_media ( metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle,videoURL, paperName, paperURL, advertisementImage, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    return new Promise((resolve, reject) => {
        db.query(query, [ metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle,videoURL, paperName, paperURL, advertisementImage, created_at], (err, results) => {
            if (err) {
                reject(err);
            } else {
                resolve(results.insertId);
            }
        });
    });
};


const getAllMedias = () => {
    const query = 'SELECT * FROM in_the_media';
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

//update Medias status
const updateMediasStatus = (id, status) => {
    const query = 'UPDATE in_the_media SET status = ? WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [status, id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get Medias by ID
const getMediasById = (id) => {
    const query = 'SELECT * FROM in_the_media WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Medias not found')); 
            resolve(results[0]);
        });
    });
};

const getMediasBySlug = (slugURL) => {
    console.log(slugURL.slugURL)
    const query = 'SELECT * FROM in_the_media WHERE slugurl = ?';
    
    return new Promise((resolve, reject) => {
        db.query(query, [slugURL.slugURL], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Medias not found')); 
            resolve(results[0]);
        });
    });
};

const getAllRecentMedias = () => {
    const query = 'SELECT * FROM in_the_media ORDER BY created_at DESC';
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



//delete a Medias
const deleteMediaFromDB = (id) => {
    const query = 'DELETE FROM in_the_media WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get image path by ID
const getImagePathById = (id) => {
    const query = 'SELECT advertisementImage FROM in_the_media WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Medias not found'));
            resolve(results[0].advertisementImage);
        });
    });
};

//update Medias
const updateMedias = (id,  metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle,videoURL, paperName, paperURL, advertisementImage) => {
    const query = 'UPDATE in_the_media SET metaTitle = ?, metaKeyword = ?, metaDescription = ?, advertisementType = ?, advertisementDate = ?, advertisementTitle = ?, videoURL = ?, paperName = ?, paperURL = ?, advertisementImage = ?, WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [ metaTitle, metaKeyword, metaDescription, advertisementType, advertisementDate, advertisementTitle,videoURL, paperName, paperURL, advertisementImage,  id], (err, result) => {
            if (err) return reject(err);
            resolve(result);
        });
    });
};

module.exports = {
    addMedias, getAllMedias, updateMediasStatus, getAllRecentMedias, getMediasById, getMediasBySlug, deleteMediaFromDB, getImagePathById, updateMedias
};