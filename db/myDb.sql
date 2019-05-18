CREATE DATABASE shopping_cart_db;

CREATE TABLE users_table (
id serial,
name varchar(60) NOT NULL,
fone numeric(30) NOT NULL,
email varchar(100) NOT NULL,
PRIMARY KEY(id)
);

CREATE TABLE products (
id serial,
name varchar(60) NOT NULL,
price decimal(6, 2),
description varchar(255),
PRIMARY KEY(id)
);

CREATE TABLE orders (
order_id serial,
userID serial REFERENCES users_table(id),
productID serial REFERENCES product(id),
date timestamp,
price decimal(6, 2),
PRIMARY KEY(order_id)
);

