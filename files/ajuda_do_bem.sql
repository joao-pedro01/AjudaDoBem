SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `ajuda_do_bem` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ajuda_do_bem`;

CREATE TABLE 'users' (
  'id_user' int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'nome' varchar(50) COLLATE utf8_bin NOT NULL,
  'username' varchar(25) COLLATE utf8_bin NOT NULL,
  'email' varchar(65) COLLATE utf8_bin NOT NULL,
  'senha' varchar(32) COLLATE utf8_bin NOT NULL,
  'celular' bigint(11) NOT NULL,
  'telefone' bigint(10) DEFAULT '0',
  'cpf' bigint(11) NOT NULL,
  'data' date NOT NULL,
  'hora' time NOT NULL
);
CREATE TABLE 'donation' (
  'id_donation' int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  'title' varchar(50),
  'description' varchar(255),
  'category' varchar(50)
);
CREATE TABLE 'images_users'(
 	'id_image' int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    'id_user' int,
    'id_type' int
);