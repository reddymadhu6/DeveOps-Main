CREATE DATABASE users;
use users;


CREATE TABLE register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    
);

CREATE TABLE booking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dob DATE,
    occupation VARCHAR(255),
    phone VARCHAR(20),
    gender VARCHAR(10),
    address TEXT,
    date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    msg TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);















INSERT INTO register
VALUES
    (1, 'madhu@gmail.com', '123456789'),
    (2, 'manoj@gmail.com', '123456789'),
    (3, 'madhusoodan65@gmail.com', '123456789');

















