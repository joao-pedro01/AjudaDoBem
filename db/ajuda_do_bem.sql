CREATE DATABASE ajuda_do_bem;
use ajuda_do_bem;

CREATE TABLE type_users(
    id int AUTO_INCREMENT PRIMARY KEY,
    type varchar(25)
);

CREATE TABLE types(
	id int AUTO_INCREMENT PRIMARY KEY,
	type varchar(10)
);

CREATE TABLE images(
	id int AUTO_INCREMENT PRIMARY KEY,
    id_type int NOT NULL,
    path varchar(60) NOT NULL,
    
    FOREIGN KEY (id_type) REFERENCES types (id)
);

INSERT INTO type_users(type) VALUE ('Usuário');
INSERT INTO type_users(type) VALUE ('Colaborador');
INSERT INTO type_users(type) VALUE ('Admin');

CREATE TABLE users(
	id int AUTO_INCREMENT PRIMARY KEY,
    id_type int NOT NULL,
    id_image int NOT NULL,
    name varchar(50) NOT NULL,
    birth_date date NOT NULL,
    cpf bigint(11) NOT NULL,
    cell int(9),
    email varchar(55) NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    created date,
    modified date,

    FOREIGN KEY (id_type) REFERENCES type_users (id),
    FOREIGN KEY (id_image) REFERENCES images (id)
);


CREATE TABLE categorys(
	id int AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE necessitys(
    id int AUTO_INCREMENT PRIMARY KEY,
	degree varchar(25)
);

INSERT INTO necessitys(degree) VALUE ('Baixo');
INSERT INTO necessitys(degree) VALUE ('Médio');
INSERT INTO necessitys(degree) VALUE ('Alto');

CREATE TABLE products(
	id int AUTO_INCREMENT PRIMARY KEY,	
	id_user int NOT NULL,
    id_necessity int NOT NULL,
    id_category int NOT NULL,
    title varchar(25) NOT NULL,
    description varchar(255),
    
	FOREIGN KEY (id_user) REFERENCES users (id),
    FOREIGN KEY (id_necessity) REFERENCES necessitys (id),
    FOREIGN KEY (id_category) REFERENCES categorys (id)
);

CREATE TABLE products_images(
    id_product int NOT NULL,
    id_image int NOT NULL,
    
	FOREIGN KEY (id_product) REFERENCES products (id),
    FOREIGN KEY (id_image) REFERENCES images (id)
);