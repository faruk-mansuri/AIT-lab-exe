const http = require('http');
const querystring = require('querystring');

const server = http.createServer((req, res) => {
  const index = req.url.indexOf('?');
  if (index === -1) {
    return res.end('Hello User');
  }

  const queryString = req.url.slice(index + 1);
  const query = querystring.parse(queryString);
  console.log(query);
  return res.end('Hello');
});

server.listen(5000, console.log('server is listening on port: 5000'));

// using express library (need to install express - command - npm i express)
// const express = require('express');
// const app = express();

// app.get('/', (req, res) => {
//   console.log(req.query);
//   res.send('home');
// });

// app.listen(5000, console.log('server is listening on 5000'));
