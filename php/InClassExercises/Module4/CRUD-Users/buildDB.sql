DROP DATABASE IF EXISTS Crud;
CREATE DATABASE Crud;
USE Crud;

CREATE TABLE `USER` (
  `USER_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(20) NOT NULL,
  `USER_FULLNAME` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(500) NOT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `USER_NAME` (`USER_NAME`)
);