CREATE DATABASE shopping_cart_db;

CREATE TABLE users_table (
id serial,
name varchar(60) NOT NULL,
phone numeric(30) NOT NULL,
email varchar(100) NOT NULL,
PRIMARY KEY(id)
);

CREATE TABLE products (
id serial,
name varchar(60) NOT NULL,
price decimal(6, 2),
description varchar(255),
img_path varchar(255),
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

INSERT INTO products (name, price, description, img_path)
VALUES ('T-Shirt Dance', 29, 'Beautiful, and light T-Shirt to practice sports', 'img/store/1'),
('Dark T-Shirt', 39, 'Fashion, ideal to casual uses', 'img/store/2'),
('Dark T-Shirt', 35, 'Fashion, ideal to casual uses', 'img/store/3'),
('Dark T-Shirt', 32, 'Fashion, ideal to casual uses', 'img/store/4'),
('Dark T-Shirt', 25, 'Fashion, ideal to casual uses', 'img/store/5'),
('Dark T-Shirt', 54, 'Fashion, ideal to casual uses', 'img/store/6'),
('Dark T-Shirt', 74, 'Fashion, ideal to casual uses', 'img/store/7'),
('Dark T-Shirt', 15, 'Fashion, ideal to casual uses', 'img/store/8'),
('Dark T-Shirt', 45, 'Fashion, ideal to casual uses', 'img/store/9');