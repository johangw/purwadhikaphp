drop database if exists PurwaDB;
create database if not exists PurwaDB;
use PurwaDB;
CREATE TABLE customer (
    id INT NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE product (
    category 	INT NOT NULL, 
	id 			INT NOT NULL,
    price 		DECIMAL,
    PRIMARY KEY(category, id)
);
CREATE TABLE product_order (
    no 					INT NOT NULL AUTO_INCREMENT,
    product_category 	INT NOT NULL,
    product_id 			INT NOT NULL,
    customer_id 		INT NOT NULL,
    PRIMARY KEY(no),
    FOREIGN KEY (product_category, product_id)
      REFERENCES product(category, id)
      ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (customer_id)
      REFERENCES customer(id)
);
-- Data Customer --
insert into customer values(123);
insert into customer values(321);
-- Data Product --
insert into product values(1,1,1000);
insert into product values(1,2,2000);
insert into product values(2,1,1500);
insert into product values(2,2,2500);
-- Data Product Order --
insert into product_order values(null,1,1,123);
insert into product_order values(null,1,1,321);
insert into product_order values(null,1,2,123);
insert into product_order values(null,2,1,321);
insert into product_order values(null,2,2,123);
