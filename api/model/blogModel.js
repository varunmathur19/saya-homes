const db = require('../config/db');

//add blogs
const addBlogs = ( blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, status, date, created) => {
    const query = 'INSERT INTO blogs ( blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, status, date, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    return new Promise((resolve, reject) => {
        db.query(query, [ blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, status, date, created], (err, results) => {
            if (err) {
                reject(err);
            } else {
                resolve(results.insertId);
            }
        });
    });
};


const getAllBlogs = () => {
    const query = 'SELECT * FROM blogs';
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

//update blogs status
const updateBlogsStatus = (id, status) => {
    const query = 'UPDATE blogs SET status = ? WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [status, id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get blogs by ID
const getBlogsById = (id) => {
    const query = 'SELECT * FROM blogs WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Blog not found')); 
            resolve(results[0]);
        });
    });
};

const getBlogsBySlug = (slugURL) => {
    console.log(slugURL.slugURL)
    const query = 'SELECT * FROM blogs WHERE slugurl = ?';
    
    return new Promise((resolve, reject) => {
        db.query(query, [slugURL.slugURL], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Blog not found')); 
            resolve(results[0]);
        });
    });
};

const getAllRecentBlogs = () => {
    const query = 'SELECT * FROM blogs ORDER BY created DESC';
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



//delete a blog
const deleteBlogFromDB = (id) => {
    const query = 'DELETE FROM blogs WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            resolve(results);
        });
    });
};

//get image path by ID
const getImagePathById = (id) => {
    const query = 'SELECT image FROM blogs WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [id], (err, results) => {
            if (err) return reject(err);
            if (results.length === 0) return reject(new Error('Blog not found'));
            resolve(results[0].image_path);
        });
    });
};

//update blog
const updateBlog = (id,  blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, date) => {
    const query = 'UPDATE blogs SET blogstypes = ?, meta_title = ?, meta_desc = ?, meta_key = ?, heading = ?, slugurl = ?, content = ?, image = ?, bl_type = ?, bl_link = ?, image_title = ?, news_state = ?, date = ?, WHERE id = ?';
    return new Promise((resolve, reject) => {
        db.query(query, [ blogstypes, meta_title, meta_desc, meta_key, heading, slugurl, content, image, bl_type, bl_link, image_title, news_state, date, id], (err, result) => {
            if (err) return reject(err);
            resolve(result);
        });
    });
};

module.exports = {
    addBlogs, getAllBlogs, updateBlogsStatus, getAllRecentBlogs, getBlogsById, getBlogsBySlug, deleteBlogFromDB, getImagePathById, updateBlog
};