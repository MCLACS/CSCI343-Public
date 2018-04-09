DROP DATABASE IF EXISTS courses;
CREATE DATABASE courses;
USE courses;

CREATE TABLE `MyCourses` (
  `CourseID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CourseCode` varchar(7) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `ProfName` varchar(255) NOT NULL,
  PRIMARY KEY (`CourseID`),
  UNIQUE KEY `CourseID` (`CourseID`)
);

INSERT INTO MyCourses (CourseCode, CourseName, ProfName) VALUES ('CSCI362', 'Operating Systems', 'Cohen');
