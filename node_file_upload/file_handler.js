const express = require('express');
const app = express();


app.post('/fileUpload', function (req, res) {
console.log('****************handler for your upload******************************');

}) 

app.listen(3000, function () {
  console.log('uploader receiver listening on port 3000!')
})