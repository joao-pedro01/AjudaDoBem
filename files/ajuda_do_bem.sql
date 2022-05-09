CREATE DATABASE ajuda_do_bem;
USE ajuda_do_bem;

CREATE TABLE users (
  id_user int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(50) COLLATE utf8_bin NOT NULL,
  username varchar(25) COLLATE utf8_bin NOT NULL,
  email varchar(65) COLLATE utf8_bin NOT NULL,
  senha varchar(32) COLLATE utf8_bin NOT NULL,
  celular bigint(11) NOT NULL,
  cpf bigint(11) NOT NULL,
  created datetime,
  modify datetime
);
CREATE TABLE donation (
  id_donation int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  title varchar(50),
  description varchar(255),
  category varchar(50)
);
CREATE TABLE images_users(
 	id_image int AUTO_INCREMENT PRIMARY KEY NOT NULL,
  id_user int,
  id_type int
);