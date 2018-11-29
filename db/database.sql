DROP DATABASE cabService;

CREATE DATABASE cabService;

use cabService;

DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS users;

CREATE TABLE roles (
    user_role VARCHAR(10) PRIMARY KEY
);

CREATE TABLE users (
    username VARCHAR(15) PRIMARY KEY,
    pass VARCHAR(15) NOT NULL,
    fullname VARCHAR(35) NOT NULL,
    address VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    nic VARCHAR(12) NOT NULL,
    user_role VARCHAR(10) NOT NULL,
    CONSTRAINT FOREIGN KEY (user_role) REFERENCES roles(user_role) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE admins (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE customer (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username) ON DELETE CASCADE ON UPDATE CASCADE,
    joined_date DATE NOT NULL,
    reg_status BOOLEAN NOT NULL
);

CREATE TABLE driver (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username) ON DELETE CASCADE ON UPDATE CASCADE,
    licence_no VARCHAR(10) NOT NULL,
    licence_exp DATE NOT NULL,
    working_status BOOLEAN NOT NULL
);

CREATE TABLE vehicle (
    vehicle_no VARCHAR(11) PRIMARY KEY,     -- WP-ABC-xxxx pattern
    brand VARCHAR(12) NOT NULL,
    model VARCHAR(20) NOT NULL,
    vehicle_type VARCHAR(20) NOT NULL,
    no_of_passengers INT NOT NULL,
    price DECIMAL(7,2)
);

CREATE TABLE booking_details (
    customer_id VARCHAR(15),
    vehicle_no VARCHAR(11),
    booking_date DATE NOT NULL,
    return_date DATE NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    driver_id VARCHAR(15),
    CONSTRAINT FOREIGN KEY (driver_id) REFERENCES users(username) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (customer_id) REFERENCES customer(username) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (vehicle_no) REFERENCES vehicle(vehicle_no) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (customer_id,vehicle_no)
);













-- DATA ------------

INSERT INTO roles VALUES('admin'),('customer'),('driver');

INSERT INTO users VALUES(
    'admin',
    'admin',
    'Oshan Mendis',
    'No. 80/1, Galle Rd, Pinwatta, Panadura',
    '1996-06-14',
    '961660483V',
    'admin'
),
(
    'ucsc',
    'ucsc',
    'UCSC',
    'Colombo 07',
    '1963-05-22',
    '636758756V',
    'customer'
);

INSERT INTO admins VALUES('admin');

INSERT INTO customer VALUES (
    'ucsc',
    '2018-11-14',
    1
);

INSERT INTO vehicle VALUES (
    "WP-ABC-2052",
    "Nissan",
    "GTR",
    "Car",
    2,
    20000.00
),
(
    "WP-AAA-6754",
    "Toyota",
    "Corolla",
    "Car",
    4,
    7000.00
),
(
    "WP-DAA-6754",
    "Honda",
    "Vezel",
    "SUV",
    4,
    7000.00
);

