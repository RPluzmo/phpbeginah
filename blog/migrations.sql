-- Izveido DB blog
CREATE DATABASE blog;
USE blog;

-- Izveido tabulu posts
CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(50),
category_id VARCHAR(25)
);

-- Ievieto post tabulā content kolonā sākuma datus
INSERT INTO posts(content)
VALUES ("Pirmais bloga ieraksts"),("Otrais bloga ieraksts");

-- Izveido tabulu categories
CREATE TABLE categories(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_name VARCHAR(50)
);

-- Ievieto categories tabulā contont kolonā sākuma datus
INSERT INTO categories(category_name)
VALUES ("Svētki"),("Mūzika"),("Sports"); 