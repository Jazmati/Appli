// On utilise notre enveloppe sur node-mysql
var db = require('./db.js');
 
// On veut pouvoir tester la validité des noms de colonnes pour se protéger
// des injections SQL.
var columnNameRegex = /^([a-zA-Z0-9_$]{1,64}\.)?[a-zA-Z0-9_$]{1,64}$/;
function checkColumnName(name) {
    return columnNameRegex.test(name);
}
 
function checkColumns(obj) {
    for (var key in obj) {
        if (!checkColumnName(key)) {
            return false;
        }
    }
    return true;
}
 
// Liste des clients, liste des produits : le code est trivial ici.
exports.listClients = function(callback) {
    db.findAll('Client', callback);
}
 
exports.listProducts = function(callback) {
    db.findAll('Product', callback);
}
 
// Récupération d'une donnée spécifique via l'id
exports.getProduct = function(id, callback) {
    db.find('Product', id, callback);
}
 
exports.getClient = function(id, callback) {
    db.find('Client', id, callback);
}
 
// On utilise les jointures implicite pour produire un résultat avec des
// données intéressantes (produits achetés, prix, nom du client)
// Une solution plus élégante ici serait de créer une vue.
exports.getBill = function(id, callback) {
    db.query('SELECT Client.name, Product.name, Product.price, Bill.due_date\
        FROM Client, Bill, Product, BillProducts WHERE Bill.id =\
        BillProducts.bill_id AND Product.id = BillProducts.product_id AND\
        Bill.client_id = Client.id AND Bill.id = ?;', [id], callback);
}
 
// Idem getBill
exports.listBills = function(callback) {
    db.query('SELECT Bill.id, Bill.due_date, Client.name FROM Client, Bill\
        WHERE Bill.client_id = Client.id;', callback);
}
 
// Pour la création et la mise à jour, on ajoute une vérification
// pour les noms de colonne.
exports.insertProduct = function(values, callback) {
    if (checkColumns(values)) {
        db.insert('Product', values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
exports.updateProduct = function(id, values, callback) {
    if (checkColumns(values)) {
        db.updateById('Product', id, values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
exports.insertClient = function(values, callback) {
    if (checkColumns(values)) {
        db.insert('Client', values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
exports.updateClient = function(id, values, callback) {
    if (checkColumns(values)) {
        db.updateById('Client', id, values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
exports.insertBill = function(values, callback) {
    if (checkColumns(values)) {
        db.insert('Bill', values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
exports.updateBill = function(id, values, callback) {
    if (checkColumns(values)) {
        db.updateById('Bill', id, values, callback);
    } else {
        callback('Invalid column name', null);
    }
}
 
// Ajouter un produit à une facture et l'ôter
exports.addProductToBill = function(billId, productId, callback) {
    db.insert('BillProducts', { bill_id : billId, product_id : productId },
        callback);
}
 
exports.removeProductFromBill = function(billId, productId, callback) {
    db.remove('BillProducts', { bill_id : billId, product_id : productId },
        callback);
}