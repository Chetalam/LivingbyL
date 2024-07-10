-- create database

DROP DATABASE IF EXISTS livingbyl ;
CREATE DATABASE IF NOT EXISTS livingbyl;
USE livingbyl;

-- create table

DROP TABLE IF EXISTS registration;

DROP TABLE IF EXISTS registration;
CREATE TABLE IF NOT EXISTS registration(
    fullname varchar(50) NOT NULL DEFAULT '',
    budget varchar(50) NOT NULL DEFAULT '',
    password varchar(50) NOT  NULL DEFAULT '',
    dateofbirth varchar(50) NOT NULL DEFAULT '',
    description varchar(50) NOT NULL DEFAULT '',
    PRIMARY KEY(fullname)

);