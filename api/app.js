const express = require('express');
const app = express();
const port = process.env.PORT || 8080;
require('dotenv').config();
const path = require('path');
const bodyParser = require('body-parser');
const cors = require('cors');
// Middleware
app.use(express.json()); 
app.use(bodyParser.urlencoded({ extended: true }));

const authRoutes = require('./routes/authRoutes')
const blogs = require('./routes/blogRoutes')
const events = require('./routes/eventsRoute')
const inMedia = require('./routes/inMediaRoutes')
const customerSupport = require('./routes/customerSupportRoutes')
const projectQuery = require('./routes/projectEnquiryRoutes')
const career = require('./routes/carrerRoute')

app.use('/uploads', express.static(path.join(__dirname, 'uploads')));

const corsOptions = {
  origin: function (origin, callback) {
    callback(null, origin); 
  },
  credentials: true,
};
app.use(cors(corsOptions));

app.use(express.json({ limit: '100mb' }));

// Sample route for checking the connection
app.get('/', (req, res) => {
    res.send('API is working');
});

app.use('/auth', authRoutes);

app.use('/blog', blogs);

app.use('/events', events);

app.use('/media', inMedia);

app.use('/customerSupport', customerSupport)

app.use('/projectQuery', projectQuery)

app.use('/career', career);

// Start the server
const server = app.listen(port, () => {
  const address = server.address();
  const host = address.address === '::' ? 'localhost' : address.address;
  const url = `http://${host}:${address.port}`;
  console.log(`Server running at ${url}`);
});