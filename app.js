const express = require('express');

const app = express();
app.set('views', 'resources/views');
app.set('view engine', 'pug');

app.get('/', (req, res) => {
  res.render('index');
});

app.listen(3000);
