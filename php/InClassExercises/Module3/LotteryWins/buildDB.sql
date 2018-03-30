DROP DATABASE IF EXISTS Lottery;
CREATE DATABASE Lottery;
USE Lottery;

CREATE TABLE Wins (
    ID int NOT NULL AUTO_INCREMENT,
    Day Text NOT NULL,
    Times int NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO Wins (Day, Times) VALUES ('Monday', 0);
INSERT INTO Wins (Day, Times) VALUES ('Tuesday', 0);
INSERT INTO Wins (Day, Times) VALUES ('Wednesday', 0);
INSERT INTO Wins (Day, Times) VALUES ('Thursday', 0);
INSERT INTO Wins (Day, Times) VALUES ('Friday', 0);
