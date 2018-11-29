SHOW DATABASES
CREATE DATABASE sample_db;
USE sample_db;
CREATE TABLE animals (id INT(11), name VARCHAR(20), location VARCHAR(10), color VARCHAR(8), food VARCHAR(25));
INSERT INTO animals (id, name, location, color, food) VALUES (1, "Panda", "China", "bl/w", "bamboo");
SELECT * FROM animals
mysql-ctl
