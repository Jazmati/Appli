var data=require('./bill-data.js');
/**
 * Module dependencies.
 */

var express = require('express')
  , routes = require('./routes')
  , user = require('./routes/user')
  , http = require('http')
  , path = require('path');

var app = express();

app.configure(function(){
  app.set('port', process.env.PORT || 3000);
  app.set('views', __dirname + '/views');
  app.set('view engine', 'jade');
  app.use(express.favicon());
  app.use(express.logger('dev'));
  app.use(express.bodyParser());
  app.use(express.methodOverride());
  app.use(app.router);
  app.use(express.static(path.join(__dirname, 'public')));
});

app.configure('development', function(){
  app.use(express.errorHandler());
});

app.get('/', routes.index);
app.get('/users', user.list);

http.createServer(app).listen(app.get('port'), function(){
  console.log("Express server listening on port " + app.get('port'));
});


/// Routes
function dataCallback(res) {
    return function(err, data) {
        if (err) {
            res.send({error : err});
        } else {
			// Il serait intéressant de fournir une réponse plus lisible en
			// cas de mise à jour ou d'insertion...
            res.send(data);
        }
    }
}
 
// Lecture, via GET
app.get('/bills', function(req, res) {
    data.listBills(dataCallback(res));
});
 
app.get('/bills/:id', function(req, res) {
    data.getBill(req.params.id, dataCallback(res));
});
 
app.get('/clients', function(req, res) {
    data.listClients(dataCallback(res));
});
 
app.get('/clients/:id', function(req, res) {
    data.getClient(req.params.id, dataCallback(res));
});
 
app.get('/products', function(req, res) {
    data.listProducts(dataCallback(res));
});
 
app.get('/products/:id', function(req, res) {
    data.getProduct(req.params.id, dataCallback(res));
});
 
// Ajout et suppression de produits sur une facture, via POST
 
app.post('/bills/:billId/add/:productId', function(req, res) {
    data.addProductToBill(req.params.billId, req.params.productId,
        dataCallback(res));
});
 
app.post('/bills/:billId/remove/:productId', function(req, res) {
    data.removeProductFromBill(req.params.billId, req.params.productId,
        dataCallback(res));
});
 
// Mise à jour via POST
app.post('/bills/:id', function(req, res) {
    data.updateBill(req.params.id, req.body, dataCallback(res));
});
 
app.post('/products/:id', function(req, res) {
    data.updateProduct(req.params.id, req.body, dataCallback(res));
});
 
app.post('/clients/:id', function(req, res) {
    data.updateClient(req.params.id, req.body, dataCallback(res));
});
 
// Ajout via POST
app.post('/clients', function(req, res) {
    data.insertClient(req.body, dataCallback(res));
});
 
app.post('/bills', function(req, res) {
    data.insertBill(req.body, dataCallback(res));
});
 
app.post('/products', function(req, res) {
    data.insertProduct(req.body, dataCallback(res));
});
