DROP DATABASE L11_Alijon_60299_musicalschool_Mid2;

CREATE DATABASE L11_Alijon_60299_musicalschool_Mid2;

CREATE TABLE L11_Alijon_60299_musicalschool_Mid2.subjects(
id integer not null auto_increment unique,
instlec varchar(50),
musicinst varchar(50),
tutor varchar(50),
amount smallint,
musiccost smallint,
lechours smallint,
primary key (id)
);
INSERT INTO L11_Alijon_60299_musicalschool_Mid2.subjects (id, instlec, musicinst,tutor,amount, musiccost, lechours)
VALUES
(1,"Casio class","Casio with forks","Depp Smith",2,250,30),
(2,"Guitar","Guitar,Violin ","Kim Chan",1,300,28);