-- create database

DROP DATABASE IF EXISTS LivingbyL ;
CREATE DATABASE IF NOT EXISTS LivingbyL;
USE LivingbyL;

-- create table

DROP TABLE IF EXISTS registration;

CREATE TABLE registration(
    fullname varchar (50) NOT NULL AUTO_INCREMENT,
    username varchar (50) NOT NULL DEFAULT '',
    password varchar (50) NOT  NULL DEFAULT '',
    dateofbirth int (50) NOT NULL DEFAULT '',
    description varchar (50) NOT NULL DEFAULT '',
    PRIMARY KEY(fullname)

);