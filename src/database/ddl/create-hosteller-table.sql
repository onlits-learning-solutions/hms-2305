CREATE TABLE IF NOT EXISTS hosteller
(
hosteller_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
gender CHAR(1),
date_of_birth DATE,
contact_no CHAR(10),
email VARCHAR(50),
fathers_name VARCHAR(50)
);