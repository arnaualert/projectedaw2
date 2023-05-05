DROP DATABASE IF exists bd_luks_troplantair;
CREATE DATABASE bd_luks_troplantair;
USE bd_luks_troplantair;






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


CREATE TABLE treballadors (
   usersId int NOT NULL PRIMARY KEY AUTO_INCREMENT,
   usersName VARCHAR(120) NOT NULL ,  
   usersEmail VARCHAR(120) NOT NULL ,
   usersUid VARCHAR(120)  NOT NULL ,
   usersPwd  VARCHAR(120)  NOT NULl
);


INSERT INTO `treballadors` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', '$2y$10$uThkygHG1XW0ExtnnEyAUO6FPZV7Z5YrWTpApN4POf57AL5Ww.FkW');


CREATE TABLE pwdreset2 (
   pwdResetId int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   pwdResetEmail text NOT NULL ,
   pwdResetSelector text NOT NULL ,
   pwdResetToken LONGTEXT  NOT NULL ,
   pwdResetExpires  text  NOT NULL
);




CREATE TABLE activitats (
   id_activitat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   nom_activitat VARCHAR(255) NOT NULL
);
INSERT INTO activitats (id_activitat, nom_activitat) VALUES
(1,"Archery Tag"),
(2,"Bublee Football"),
(3,"Escape Room Portatil: Project C"),
(4,"Ristoerapia "),
(5,"Improvisació "),
(6,"Charles Coach Sistemtic"),
(7,"Charles Coach Cognitiu"),
(8,"Charles Coach Antòligic"),
(9,"Reunions sobre Marketing"),
(10,"Celebracions d'empresa");




CREATE TABLE sub_activitats (
   id_sub_activiat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   descripcio VARCHAR(355) NOT NULL,
   preu VARCHAR(30),
   id_activitat int,
   FOREIGN KEY (id_activitat) REFERENCES activitats(id_activitat)
);
INSERT INTO sub_activitats (id_sub_activiat,descripcio,preu, id_activitat) VALUES
(1,"La dinàmica és com jugar al pintball, simplament canviem les pistoles de pintura per arcs amb fletxes que tenen la punta de goma.  A l'arribar es faran dos grups  i l'objectiu serà col·lecionar el maxim de punts i sobreviure.","30€",1),
(2,"Es necessari un grup de com a minim 8 personas, es jugar una partida de futbol amb  una esfera de plàstic al voltant del cos, que això fa  que es dificultin molt les coses ja que  l'esfera impadeix la mobilitat.","30€",2),
(3,"Es un escape room que es pot translladar a qualsevol lloc  o fer en el mateix local de la companyia. Quan comences a jugar tindreu que lluitar  per avitar el fi del món.","30€",3),
(4,"L'objectiu és crear un vincle de confiança amb l'equip.  la risoterapia redueix les hormones de l'estres  com la serotomina, ademés ajuda a la comuciació positiva.",null,4),
(5,"L'objectiu és apendre a comunicar-se millor o  saber enfretar conflictes de forma asertiva. Durada de 8 hores dividides en 4 sesions.",null,5),
(6,"Considera la fora en la que les persones estructruen els pensaments i  es comuniquin. L'objectiu és millorar la manera en la que s'expressen els treballadors. pot ajudar a les empreses a que els seus treballadors siguin més conscients de les seves capacitats i actituds, i axí ougin assolir d'una manera més eficaç els seus objectius.",null,6),
(7,"Aquest tipus de treballa especificament els processos mentals.  A partir de l'entreteniment de les funcions congitives a desenvolupar habilitats  que permetin superar problemas pràctics, millorar l'exercici i  que permetin assolir els objectius d'una manera més eficaç.",null,7),
(8,"Fe antendre als treballadors que l'empresa  és com un sistema d'elements interconectats entre si,  això significa que qualsevol acció dels treballadors  te una repercussió directa als altres treballadors  i a la mateixa empressa. Així que per un petit canvi que faci  l'empresa tindrà impacte a tots els nivells de la companyia.",null,8),
(9,"Ajudem a les empresas mitjançant gent coneguda  per a que  facin  col·laboracions per les reds  socials  del famós  o  anuncis per compte de l'empresa. ",null,9),
(10,"Segons les indicacions de l'empresa i el tipus de celebració   que volen fer ens encarreguem  de trobar un local,  decoració, equipo de música, dj/cantant, apreitiu, begudes.",null,10);


CREATE TABLE reservas (
 id_reserva INT AUTO_INCREMENT PRIMARY KEY,
 fecha DATE NOT NULL,
 hora TIME NOT NULL,
 nombre VARCHAR(255) NOT NULL,
 nombre_actividad VARCHAR(255) NOT NULL
);
CREATE TABLE targeta (
 id_targeta INT AUTO_INCREMENT PRIMARY KEY,
 usersName VARCHAR(120) NOT NULL ,
 targeta text
);
