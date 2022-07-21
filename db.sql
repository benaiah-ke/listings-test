CREATE DATABASE real_estate;
USE real_estate;
CREATE TABLE properties(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    location VARCHAR(255),
    price INT
);

INSERT INTO `properties` (`id`, `name`, `location`, `price`) VALUES (NULL, 'Winners Apartments', 'Parklands', '25000000'),
(NULL, 'Poma Villas', 'Kasarani', '20000000'),
(NULL, 'Soy Apartments', 'Umoja', '17000000'),
(NULL, 'Tausi Flats', 'Ngong', '19000000'),
(NULL, 'Alpine Peak', 'Westlands', '10000000');