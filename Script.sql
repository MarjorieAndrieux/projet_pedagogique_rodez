#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        util_id     int (11) Auto_increment  NOT NULL ,
        util_nom    Varchar (50) ,
        util_prenom Varchar (50) ,
        util_email  Varchar (100) ,
        util_mdp    Varchar (25) ,
        util_pseudo Varchar (25) ,
        util_avatar Varchar (200) ,
        util_notif  Bool ,
        PRIMARY KEY (util_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: projet
#------------------------------------------------------------

CREATE TABLE projet(
        pro_id          int (11) Auto_increment  NOT NULL ,
        pro_nom         Varchar (50) ,
        pro_description Varchar (200) ,
        pro_image       Varchar (200) ,
        pro_deadline    Date ,
        pro_date        Datetime ,
        util_id         Int ,
        stat_id         Int ,
        PRIMARY KEY (pro_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        comm_id             int (11) Auto_increment  NOT NULL ,
        comm_comment        Varchar (200) ,
        util_id             Int ,
        util_id_utilisateur Int ,
        PRIMARY KEY (comm_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: avis
#------------------------------------------------------------

CREATE TABLE avis(
        avis_id          int (11) Auto_increment  NOT NULL ,
        avis_commentaire Varchar (200) ,
        util_id          Int ,
        pro_id           Int ,
        PRIMARY KEY (avis_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: post
#------------------------------------------------------------

CREATE TABLE post(
        post_id   int (11) Auto_increment  NOT NULL ,
        post_news Varchar (200) ,
        util_id   Int ,
        PRIMARY KEY (post_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tag
#------------------------------------------------------------

CREATE TABLE tag(
        tag_id  int (11) Auto_increment  NOT NULL ,
        tag_nom Varchar (25) ,
        PRIMARY KEY (tag_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: statut
#------------------------------------------------------------

CREATE TABLE statut(
        stat_id  int (11) Auto_increment  NOT NULL ,
        stat_nom Varchar (50) ,
        PRIMARY KEY (stat_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tag_pro
#------------------------------------------------------------

CREATE TABLE tag_pro(
        pro_id Int NOT NULL ,
        tag_id Int NOT NULL ,
        PRIMARY KEY (pro_id ,tag_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tag_util
#------------------------------------------------------------

CREATE TABLE tag_util(
        util_id Int NOT NULL ,
        tag_id  Int NOT NULL ,
        PRIMARY KEY (util_id ,tag_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contribution
#------------------------------------------------------------

CREATE TABLE contribution(
        util_id Int NOT NULL ,
        pro_id  Int NOT NULL ,
        PRIMARY KEY (util_id ,pro_id )
)ENGINE=InnoDB;

ALTER TABLE projet ADD CONSTRAINT FK_projet_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE projet ADD CONSTRAINT FK_projet_stat_id FOREIGN KEY (stat_id) REFERENCES statut(stat_id);
ALTER TABLE commentaire ADD CONSTRAINT FK_commentaire_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE commentaire ADD CONSTRAINT FK_commentaire_util_id_utilisateur FOREIGN KEY (util_id_utilisateur) REFERENCES utilisateur(util_id);
ALTER TABLE avis ADD CONSTRAINT FK_avis_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE avis ADD CONSTRAINT FK_avis_pro_id FOREIGN KEY (pro_id) REFERENCES projet(pro_id);
ALTER TABLE post ADD CONSTRAINT FK_post_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE tag_pro ADD CONSTRAINT FK_tag_pro_pro_id FOREIGN KEY (pro_id) REFERENCES projet(pro_id);
ALTER TABLE tag_pro ADD CONSTRAINT FK_tag_pro_tag_id FOREIGN KEY (tag_id) REFERENCES tag(tag_id);
ALTER TABLE tag_util ADD CONSTRAINT FK_tag_util_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE tag_util ADD CONSTRAINT FK_tag_util_tag_id FOREIGN KEY (tag_id) REFERENCES tag(tag_id);
ALTER TABLE contribution ADD CONSTRAINT FK_contribution_util_id FOREIGN KEY (util_id) REFERENCES utilisateur(util_id);
ALTER TABLE contribution ADD CONSTRAINT FK_contribution_pro_id FOREIGN KEY (pro_id) REFERENCES projet(pro_id);
