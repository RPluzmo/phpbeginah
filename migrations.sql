CREATE DATABASE blog;
USE blog;

CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
conntent VARCHAR(1000)
);

INSERT INTO posts(conntent)
VALUES ("Pirmais bloga ieraksts"),("Otrais bloga ieraksts");

SELECT * FROM posts;