DROP DATABASE IF exists mercadona;
CREATE DATABASE mercadona;
USE mercadona;


CREATE TABLE ocupacions (
   id_ocupacio INT PRIMARY KEY AUTO_INCREMENT,
   ocupacio VARCHAR (40),
   id_treballador INT
);

CREATE TABLE lloc_treball(
    id_lloc_treball INT PRIMARY KEY AUTO_INCREMENT,
    lloc VARCHAR(30),
    id_treballador INT

);

CREATE TABLE torn(
    id_torn INT PRIMARY KEY AUTO_INCREMENT,
    tipus_torn VARCHAR(30),
    id_treballador INT
);

CREATE TABLE treballadors (
   id_treballador INT PRIMARY KEY AUTO_INCREMENT,
   nom     VARCHAR(30), 
   cognoms VARCHAR(50), 
   correu  VARCHAR(50),
   data_neixament DATE,
   telefon VARCHAR(30),
   poblacio VARCHAR(30),
   id_ocupacio INT,
   FOREIGN KEY (id_ocupacio) REFERENCES ocupacions(id_ocupacio),
   id_lloc_treball INT,
   FOREIGN KEY (id_lloc_treball) REFERENCES lloc_treball(id_lloc_treball),
   id_torn INT,
   FOREIGN KEY (id_torn) REFERENCES torn(id_torn)
);   


CREATE TABLE hores(
    id_hores INT PRIMARY KEY AUTO_INCREMENT,
    hores INT,
    dies date,
    id_ocupacio,
    FOREIGN KEY (id_ocupacio) REFERENCES ocupacions(id_ocupacio),
    id_lloc_treball INT,
    FOREIGN KEY (id_lloc_treball) REFERENCES lloc_treball(id_lloc_treball),
    id_torn INT,
    FOREIGN KEY (id_torn) REFERENCES torn(id_torn),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES torn(id_treballador)
);

CREATE TABLE disponiblitat(
    id_disponible INT PRIMARY KEY AUTO_INCREMENT,
    diponiblitat VARCHAR(50),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES torn(id_treballador)
);


CREATE TABLE prefencias(
    id_preferencia INT PRIMARY KEY AUTO_INCREMENT,
    prefencia VARCHAR(50),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES torn(id_treballador)
);

INSERT INTO treballadors  VALUES
(1,"Francisco","Rodriguez Perez","frodri@mercadona.com","1989-02-18","626902845","Barcelona",null,null.null),
(2,"Paco","Agusto Nieto","pagus@mercadona.com","2000-06-24","756942841","Abrera",null,null.null),
(3,"Josep","Garcia Moreno","jgarcia@mercadona.com","1970-01-01","156643829","Sabadell",null,null.null),
INSERT INTO ocupacions  VALUES
(1,"Carnicer",1),
(2,"Reposador",2),
(3,"Magatzem",3),

INSERT INTO torn  VALUES
(1,"matí",1),
(2,"tarda",2),
(3,"tarda",3),



INSERT INTO lloc_treball  VALUES

INSERT INTO hores  VALUES

