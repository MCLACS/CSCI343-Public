DROP DATABASE IF EXISTS Quotes;
CREATE DATABASE Quotes;
USE Quotes;

CREATE TABLE `Quotes` (
  `QuotesID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Quote` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`QuotesID`),
  UNIQUE KEY `QuotesID` (`QuotesID`)
);

INSERT INTO Quotes (Quote) VALUES ('Life is 10% what happens to you and 90% how you react to it.');
INSERT INTO Quotes (Quote) VALUES ('Many of life''s failures are people who did not realize how close they were to success when they gave up.');
INSERT INTO Quotes (Quote) VALUES ('Life is like riding a bicycle. To keep your balance, you must keep moving.');
INSERT INTO Quotes (Quote) VALUES ('To succeed in life, you need three things: a wishbone, a backbone and a funny bone.');
INSERT INTO Quotes (Quote) VALUES ('It''s Not the Years in Your Life That Count. It''s the Life in Your Years.');