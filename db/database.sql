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
    dob DATE NOT NULL,
    nic VARCHAR(12) NOT NULL,
    user_role VARCHAR(10) NOT NULL,
    CONSTRAINT FOREIGN KEY (user_role) REFERENCES roles(user_role)
);

CREATE TABLE admins (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username)
);

CREATE TABLE customer (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username),
    joined_data DATE NOT NULL,
    reg_status BOOLEAN NOT NULL
);

CREATE TABLE driver (
    username VARCHAR(15) PRIMARY KEY REFERENCES users(username),
    licence_no VARCHAR(10) NOT NULL,
    licence_exp DATE NOT NULL,
    working_status BOOLEAN NOT NULL
);

CREATE TABLE vehicle (
    vehicle_no VARCHAR(11) PRIMARY KEY,     -- WP-ABC-xxxx pattern
    brand VARCHAR(12) NOT NULL,
    model VARCHAR(20) NOT NULL
);

CREATE TABLE booking_details (
    customer_id VARCHAR(15),
    vehicle_no VARCHAR(11),
    booking_date DATE NOT NULL,
    return_date DATE NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    driver_id VARCHAR(15),
    CONSTRAINT FOREIGN KEY (driver_id) REFERENCES users(username),
    CONSTRAINT FOREIGN KEY (customer_id) REFERENCES customer(username),
    CONSTRAINT FOREIGN KEY (vehicle_no) REFERENCES vehicle(vehicle_no),
    PRIMARY KEY (customer_id,vehicle_no)
);













-- DATA ------------

INSERT INTO roles VALUES('admin'),('customer'),('driver');

INSERT INTO users VALUES(
    'admin',
    'admin',
    'Oshan Mendis',
    '1996-06-14',
    '961660483V',
    'admin'
),
(
    'ucsc',
    'ucsc',
    'UCSC',
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

