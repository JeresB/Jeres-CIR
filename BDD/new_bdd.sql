#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: promo
#------------------------------------------------------------

CREATE TABLE promo(
        nom_promo Varchar (128) NOT NULL ,
        PRIMARY KEY (nom_promo )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matiere
#------------------------------------------------------------

CREATE TABLE matiere(
        id          int (11) Auto_increment  NOT NULL ,
        nom_matiere Varchar (255) NOT NULL ,
        id_module   Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: module
#------------------------------------------------------------

CREATE TABLE module(
        id         int (11) Auto_increment  NOT NULL ,
        nom_module Varchar (255) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id              int (11) Auto_increment  NOT NULL ,
        nom_utilisateur Varchar (255) NOT NULL ,
        nom             Varchar (128) ,
        prenom          Varchar (128) ,
        mail            Varchar (255) NOT NULL ,
        password        Varchar (2048) ,
        nom_promo       Varchar (128) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id             int (11) Auto_increment  NOT NULL ,
        note           Float NOT NULL ,
        id_utilisateur Int ,
        id_matiere     Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;

ALTER TABLE matiere ADD CONSTRAINT FK_matiere_id_module FOREIGN KEY (id_module) REFERENCES module(id);
ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_nom_promo FOREIGN KEY (nom_promo) REFERENCES promo(nom_promo);
ALTER TABLE note ADD CONSTRAINT FK_note_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id_matiere FOREIGN KEY (id_matiere) REFERENCES matiere(id);

