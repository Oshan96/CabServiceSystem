CREATE DATABASE cabService;

use cabService;

DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS users;

CREATE TABLE roles(
    user_role VARCHAR(10) PRIMARY KEY
);

CREATE TABLE users(
    username VARCHAR(15) PRIMARY KEY,
    pass VARCHAR(15) NOT NULL,
    user_role VARCHAR(10) NOT NULL,
    CONSTRAINT FOREIGN KEY (user_role) REFERENCES roles(user_role)
);













-- DATA ------------

INSERT INTO roles VALUES('admin'),('user');

INSERT INTO users VALUES(
    'admin',
    'admin',
    'admin'
),
(
    'ucsc',
    'ucsc',
    'user'
);