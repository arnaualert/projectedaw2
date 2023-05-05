DROP DATABASE IF exists mercadona;
CREATE DATABASE mercadona;
USE mercadona;


CREATE TABLE ocupacions (
   id_ocupacio INT PRIMARY KEY AUTO_INCREMENT,
   ocupacio VARCHAR (40),
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
   id_torn INT,
   FOREIGN KEY (id_torn) REFERENCES torn(id_torn)
);   

CREATE TABLE prefencias(
    id_preferencia INT PRIMARY KEY AUTO_INCREMENT,
    prefencia VARCHAR(50),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES treballadors(id_treballador)
);


CREATE TABLE disponiblitat(
    id_disponible INT PRIMARY KEY AUTO_INCREMENT,
    diponiblitat VARCHAR(50),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES treballadors(id_treballador)
);

CREATE TABLE hora(
    id_hores INT PRIMARY KEY AUTO_INCREMENT,
    hores INT,
    dies date,
    id_ocupacio INT,
    FOREIGN KEY (id_ocupacio) REFERENCES ocupacions(id_ocupacio),
    id_torn INT,
    FOREIGN KEY (id_torn) REFERENCES torn(id_torn),
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES treballadors(id_treballador)
);

INSERT INTO ocupacions  VALUES
(1,"Carnicer",1),
(2,"Reposador",2),
(3,"Magatzem",3),
(4,"Caixer",4),
(5,"Peixater",5),
(6,"Magatzem",6),
(7,"Caixer",7);

INSERT INTO torn  VALUES
(1,"mati",1),
(2,"tarda",2),
(3,"mati",3),
(4,"tarda",4),
(5,"mati",5),
(6,"tarda",6),
(7,"mati",7);


INSERT INTO treballadors  VALUES
(1,"ARNAU","Rodriguez Perez","frodri@mercadona.com","1989-02-18","626902845","Barcelona",1,2),
(2,"Paco","Agusto Nieto","pagus@mercadona.com","2000-06-24","756942841","Abrera",2,1),
(3,"Josep","Garcia Moreno","jgarcia@mercadona.com","1970-01-01","156643829","Sabadell",3,2),
(4,"Marta","Alvarez Perez","malvarez@mercadona.com","1990-07-21","287645679","Olesa de montserrat",4,1),
(5,"Lorena","Hernandez Loles","lhernandez@mercadona.com","2000-01-01","997042119","Martorell",5,2),
(6,"Carmen","Sofi Paquita","csofi@mercadona.com","1999-07-21","365145589","Olesa de montserrat",6,2),
(7,"Hugo","Sanchez Ramirez","hsanchez@mercadona.com","2001-11-11","465245779","Esparaguerra",7,2);


INSERT INTO prefencias  VALUES
(1,"Preferencia",1),
(2,"Preferencia",2),
(3,"Preferencia",3),
(4,"Preferencia",4),
(5,"Preferencia",5),
(6,"Preferencia",6),
(7,"Preferencia",7);


INSERT INTO disponiblitat  VALUES
(1,"Disponible",1),
(2,"Disponible",2),
(3,"Disponible",3),
(4,"Disponible",4),
(5,"Disponible",5),
(6,"Disponible",6),
(7,"Disponible",7);

INSERT INTO hora VALUES
(1,8,"2020-01-01",1,1,1),
(2,8,"2020-01-02",2,2,2),
(3,8,"2020-01-03",3,3,3),
(4,8,"2020-01-04",4,4,4),
(5,8,"2020-01-05",5,5,5),
(6,8,"2020-01-05",7,7,7),
(7,8,"2020-01-05",7,7,7);






