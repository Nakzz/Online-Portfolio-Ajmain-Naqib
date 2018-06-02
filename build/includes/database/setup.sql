-- -----------------------------------------------------
-- MySQL Database setup.
-- Author: Ajmain Naqib
-- Data: 6/2/18
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Creates Database called Resume
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS Resume;
USE Resume;


-- -----------------------------------------------------
-- table for Experiances with Required columns
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Resume.Experiences(
 ID INT NOT NULL AUTO_INCREMENT,
 Position VARCHAR(255) NOT NULL,
 Employer VARCHAR(255) NOT NULL,
 Location VARCHAR(255) NOT NULL,
 Task_1 VARCHAR(255) NOT NULL,
 Task_2 VARCHAR(255),
 Task_3 VARCHAR(255),
 Task_3 VARCHAR(255),
 Project_1 VARCHAR(255),
 Project_1_Link VARCHAR(255),
 Project_2 VARCHAR(255),
 Project_2_Link VARCHAR(255),
 Project_3 VARCHAR(255),
 Project_3_Link VARCHAR(255),
 TimeStart VARCHAR(255) NOT NULL,
 TimeEnd VARCHAR(255) NOT NULL,
 Datestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 Modified_Datastamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (id));
