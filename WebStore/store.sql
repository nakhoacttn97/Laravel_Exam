CREATE DATABASE store;
USE store;

CREATE TABLE brand(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL
)ENGINE = INNODB;

INSERT INTO brand(name) VALUES
    ('Laptop'), ('Mouse'), ('SSD');

CREATE TABLE category(
    category_id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(64) NOT NULL
)ENGINE = INNODB;

INSERT INTO category(category_name) 
VALUES('Cat Laptop'), ('Cat Mouse'), ('Cat SSD');