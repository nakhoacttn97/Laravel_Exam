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

CREATE TABLE Image(
    ImageId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ImageUrl CHAR(32) NOT NULL,
    OriginalName VARCHAR(64) NOT NULL,
    Size BIGINT NOT NULL,
    Type VARCHAR(16) NOT NULL,
)ENGINE = INNODB;

CREATE TABLE Product(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_id TINYINT NOT NULL,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(256) NOT NULL,
    content TEXT NOT NULL,
    url CHAR(32) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity SMALLINT NOT NULL,
    updated_at DATETIME NOT NULL,
    created_at DATETIME NOT NULL,
    CONSTRAINT Product_category_id FOREIGN KEY (category_id) REFERENCES category(category_id)
)ENGINE = INNODB;

INSERT INTO category(category_name) VALUES ('Mouse'), ('Laptop'), ('Keyboard');