DROP DATABASE IF EXISTS MyTest;
CREATE DATABASE MyTest;
USE MyTest;

CREATE TABLE Person (
    ID int NOT NULL AUTO_INCREMENT,
    Name Text NOT NULL,
    Age Int,
    PRIMARY KEY (ID)
);

CREATE TABLE Color (
    ID int NOT NULL AUTO_INCREMENT,
    Hex Text NOT NULL,
    PersonID int NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (PersonID) REFERENCES Person(ID)
);

INSERT INTO Person (Name, Age) VALUES ('Tom', '22');
INSERT INTO Person (Name, Age) VALUES ('Sally', '18');
INSERT INTO Person (Name, Age) VALUES ('Sam', '22');

INSERT INTO Color (Hex, PersonID) VALUES ('#00FF00', 1);
INSERT INTO Color (Hex, PersonID) VALUES ('#FFFFFF', 1);
INSERT INTO Color (Hex, PersonID) VALUES ('#CCCCCC', 1);
INSERT INTO Color (Hex, PersonID) VALUES ('#FF0000', 2);
INSERT INTO Color (Hex, PersonID) VALUES ('#FF00FF', 2);
INSERT INTO Color (Hex, PersonID) VALUES ('#1111FF', 3);

