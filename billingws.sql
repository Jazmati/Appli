DROP DATABASE IF EXISTS billingws;
CREATE DATABASE billingws;
USE billingws;
 
CREATE TABLE Client (
id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
address TEXT NOT NULL,
telephone CHAR(16) NULL,
PRIMARY KEY(id)
) DEFAULT CHARSET utf8 COLLATE utf8_unicode_ci;
 
CREATE TABLE Product (
id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
price DECIMAL(10, 2) NOT NULL,
PRIMARY KEY(id)
) DEFAULT CHARSET utf8 COLLATE utf8_unicode_ci;
 
CREATE TABLE Bill (
id INT(11) NOT NULL AUTO_INCREMENT,
due_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
client_id INT(11) NOT NULL,
PRIMARY KEY(id),
INDEX cli_index (client_id),
FOREIGN KEY (client_id) REFERENCES Client(id)
);
 
CREATE TABLE BillProducts (
bill_id INT(11)  NOT NULL,
product_id INT(11)  NOT NULL,
PRIMARY KEY(bill_id, product_id),
FOREIGN KEY (bill_id) REFERENCES Bill(id),
FOREIGN KEY (product_id) REFERENCES Product(id)
);
 
INSERT INTO Client(name, address, telephone) VALUES
('Paul Dupont', '8 Avenue des Champs-Elysées, 75015 Paris', '0142386756'),
('Pierre Dupond', '124 Grand Rue, 67000 Strasbourg', '0627451299')
;
 
INSERT INTO Product (name, price) VALUES
('Ecran CRT 15" Toshiba', 35.10),
('Barrette RAM 128 MB Corsair', 20.90)
;
 
INSERT INTO Bill(client_id) VALUES
(1)
;
 
INSERT INTO BillProducts VALUES
(1, 2)
;