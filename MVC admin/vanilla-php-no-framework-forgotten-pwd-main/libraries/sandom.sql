DROP DATABASE IF exists amigo;
CREATE DATABASE amigo;
USE amigo;


CREATE TABLE users (
    usersId int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usersName VARCHAR(120) NOT NULL ,
    usersEmail VARCHAR(120) NOT NULL ,
    usersUid VARCHAR(120)  NOT NULL ,
    usersPwd  VARCHAR(120)  NOT NULl ,
    targeta VARCHAR(120) NULL   
); 


CREATE TABLE pwdreset (
    pwdResetId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pwdResetEmail text NOT NULL ,
    pwdResetSelector text NOT NULL ,
    pwdResetToken LONGTEXT  NOT NULL ,
    pwdResetExpires  text  NOT NULL 
); 


