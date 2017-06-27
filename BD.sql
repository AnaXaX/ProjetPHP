/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  26/05/2017 17:54:06                      */
/*==============================================================*/
create database projet;
use projet;

drop table if exists ABSENCE;

drop table if exists ASSISTER;

drop table if exists CLASSE;

drop table if exists COURS;

drop table if exists DEVOIR;

drop table if exists DISPENCER;

drop table if exists ENSEIGNER;

drop table if exists ETUDIANT;

drop table if exists NOTE;

drop table if exists PARENT;

drop table if exists PROFESSEUR;

drop table if exists SUIVRE;

/*==============================================================*/
/* Table : ABSENCE                                              */
/*==============================================================*/
create table ABSENCE
(
   ID_ABS               bigint not null,
   ID_USER              bigint not null,
   ID_ETU               int not null,
   ID_CLASSSE           bigint not null,
   PRO_ID_USER          bigint not null,
   ID_PROF              bigint not null,
   DATE_ABS             date,
   NBR_H_ABS            int,
   PERIODE_ABS          longtext,
   primary key (ID_ABS)
);

/*==============================================================*/
/* Table : ASSISTER                                             */
/*==============================================================*/
create table ASSISTER
(
   ID_COUR              bigint not null,
   ID_USER              bigint not null,
   ID_ETU               int not null,
   primary key (ID_COUR, ID_USER, ID_ETU)
);

/*==============================================================*/
/* Table : CLASSE                                               */
/*==============================================================*/
create table CLASSE
(
   ID_CLASSSE           bigint not null,
   LIBELLE_CLASSE       longtext,
   primary key (ID_CLASSSE)
);

/*==============================================================*/
/* Table : COURS                                                */
/*==============================================================*/
create table COURS
(
   ID_COUR              bigint not null,
   LIBELLE_COUR         longtext,
   NBR_H_COUR           longtext,
   DATE_COUR            date,
   primary key (ID_COUR)
);

/*==============================================================*/
/* Table : DEVOIR                                               */
/*==============================================================*/
create table DEVOIR
(
   ID_DEVOIR            bigint not null,
   ID_USER              bigint not null,
   ID_ETU               int not null,
   PRO_ID_USER          bigint not null,
   ID_PROF              bigint not null,
   ID_CLASSSE           bigint not null,
   LIBELLE              longtext,
   DATE_EMIS            date,
   DATE_RETOUR          date,
   primary key (ID_DEVOIR)
);

/*==============================================================*/
/* Table : DISPENCER                                            */
/*==============================================================*/
create table DISPENCER
(
   ID_USER              bigint not null,
   ID_PROF              bigint not null,
   ID_COUR              bigint not null,
   primary key (ID_USER, ID_PROF, ID_COUR)
);

/*==============================================================*/
/* Table : ENSEIGNER                                            */
/*==============================================================*/
create table ENSEIGNER
(
   PRO_ID_USER          bigint not null,
   ID_PROF              bigint not null,
   ID_USER              bigint not null,
   ID_ETU               int not null,
   primary key (PRO_ID_USER, ID_PROF, ID_USER, ID_ETU)
);

/*==============================================================*/
/* Table : ETUDIANT                                             */
/*==============================================================*/
create table ETUDIANT
(
   ID_USER              bigint not null,
   ID_ETU               int not null,
   ID_CLASSSE           bigint not null,
   EMAIL_SECOURS        longtext,
   EMAIL_USER           longtext,
   PWD                  longtext,
   NOM_ETU              longtext,
   PRENOM_ETU           longtext,
   DATE_NAISS_ETU       date,
   LIEU_NAISS_ETU       longtext,
   VILLE_ETU            longtext,
   QUARTIER_ETU         longtext,
   RUE_ETU              longtext,
   NUM_MAISON           longtext,
   TEL_ETU              bigint,
   ANNE_SCOLAIRE        date,
   primary key (ID_USER, ID_ETU)
);

/*==============================================================*/
/* Table : NOTE                                                 */
/*==============================================================*/
create table NOTE
(
   NOTE                 bigint,
   ID_NOTE              bigint not null,
   ID_CLASSSE           bigint not null,
   ID_USER              bigint not null,
   ID_ETU               int not null,
   PRO_ID_USER          bigint not null,
   ID_PROF              bigint not null,
   primary key (ID_NOTE)
);

/*==============================================================*/
/* Table : PARENT                                               */
/*==============================================================*/
create table PARENT
(
   ID_USER              bigint not null,
   ID_PARENT            bigint not null,
   EMAIL_SECOURS        longtext,
   EMAIL_USER           longtext,
   PWD                  longtext,
   NOM_PARENT           longtext,
   PRENOM_PARENT        longtext,
   VILLE_PARENT         longtext,
   DATE_NAISS_PARENT    date,
   LIEU_NAISS_PARENT    longtext,
   QUARTIER_PARENT      longtext,
   RUE_PARENT           longtext,
   NUM_PARENT           longtext,
   TEL_PARENT           longtext,
   FIX_PARENT           longtext,
   primary key (ID_USER, ID_PARENT)
);

/*==============================================================*/
/* Table : PROFESSEUR                                           */
/*==============================================================*/
create table PROFESSEUR
(
   ID_USER              bigint not null,
   ID_PROF              bigint not null,
   EMAIL_SECOURS        longtext,
   EMAIL_USER           longtext,
   PWD                  longtext,
   NOM_PROF             longtext,
   PRENOM_PROF          longtext,
   DATE_NAISS_PROF      date,
   LIEU_NAISS_PROF      longtext,
   QUARTIER_PROF        longtext,
   RUE_PROF             longtext,
   NUM_PROF             longtext,
   TEL_PROF             longtext,
   primary key (ID_USER, ID_PROF)
);

/*==============================================================*/
/* Table : SUIVRE                                               */
/*==============================================================*/
create table SUIVRE
(
   ETU_ID_USER          bigint not null,
   ID_ETU               int not null,
   ID_USER              bigint not null,
   ID_PARENT            bigint not null,
   primary key (ETU_ID_USER, ID_ETU, ID_USER, ID_PARENT)
);

/*==============================================================*/
/* Table : demandeAjout                                                 */
/*==============================================================*/
create table demandeajout
(
    nomEtu longtext,
    prenomEtu longtext,
    date date,
    sexe longtext,
    adresse longtext,
    pays longtext,
    region longtext,
    codePostal bigint,
    prenomParent longtext,
    nomParent longtext,
    numeroTel bigint
);

alter table ABSENCE add constraint FK_ABSENT foreign key (ID_CLASSSE)
      references CLASSE (ID_CLASSSE) on delete restrict on update restrict;

alter table ABSENCE add constraint FK_MARQUE foreign key (ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table ABSENCE add constraint FK_REMARQUE foreign key (PRO_ID_USER, ID_PROF)
      references PROFESSEUR (ID_USER, ID_PROF) on delete restrict on update restrict;

alter table ASSISTER add constraint FK_ASSISTER foreign key (ID_COUR)
      references COURS (ID_COUR) on delete restrict on update restrict;

alter table ASSISTER add constraint FK_ASSISTER2 foreign key (ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table DEVOIR add constraint FK_DONNER foreign key (PRO_ID_USER, ID_PROF)
      references PROFESSEUR (ID_USER, ID_PROF) on delete restrict on update restrict;

alter table DEVOIR add constraint FK_REALISE foreign key (ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table DEVOIR add constraint FK_TROUVE foreign key (ID_CLASSSE)
      references CLASSE (ID_CLASSSE) on delete restrict on update restrict;

alter table DISPENCER add constraint FK_DISPENCER foreign key (ID_USER, ID_PROF)
      references PROFESSEUR (ID_USER, ID_PROF) on delete restrict on update restrict;

alter table DISPENCER add constraint FK_DISPENCER2 foreign key (ID_COUR)
      references COURS (ID_COUR) on delete restrict on update restrict;

alter table ENSEIGNER add constraint FK_ENSEIGNER foreign key (PRO_ID_USER, ID_PROF)
      references PROFESSEUR (ID_USER, ID_PROF) on delete restrict on update restrict;

alter table ENSEIGNER add constraint FK_ENSEIGNER2 foreign key (ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table ETUDIANT add constraint FK_ETUDIER foreign key (ID_CLASSSE)
      references CLASSE (ID_CLASSSE) on delete restrict on update restrict;

alter table NOTE add constraint FK_ETRE_NOTER foreign key (ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table NOTE add constraint FK_NOTE foreign key (PRO_ID_USER, ID_PROF)
      references PROFESSEUR (ID_USER, ID_PROF) on delete restrict on update restrict;

alter table NOTE add constraint FK_OBTIENT foreign key (ID_CLASSSE)
      references CLASSE (ID_CLASSSE) on delete restrict on update restrict;

alter table SUIVRE add constraint FK_SUIVRE foreign key (ETU_ID_USER, ID_ETU)
      references ETUDIANT (ID_USER, ID_ETU) on delete restrict on update restrict;

alter table SUIVRE add constraint FK_SUIVRE2 foreign key (ID_USER, ID_PARENT)
      references PARENT (ID_USER, ID_PARENT) on delete restrict on update restrict;

