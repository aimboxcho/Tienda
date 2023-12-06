CREATE DATABASE TIENDA;

CREATE TABLE USUARIOS(
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20),
    imagen VARCHAR(255),
    CONSTRAINT pk_id_usuario PRIMARY KEY(id),
    CONSTRAINT iq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO USUARIOS VALUES(NULL, 'JORDAN', 'AGUILERA', 'aguilerajordan2@gmail.com', 'contraseña', 'admin', null);

CREATE TABLE CATEGORIAS(
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    CONSTRAINT pk_id_Categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE PRODUCTOS(
    id INT(255) AUTO_INCREMENT NOT NULL,
    id_categoria INT(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    precio float(100,2) NOT NULL,
    stock VARCHAR(255) NOT NULL,
    oferta VARCHAR(2) NOT NULL,
    fecha DATE,
    imagen VARCHAR(255),
    CONSTRAINT pk_id_productos PRIMARY KEY(id),
    CONSTRAINT fk_id_categoria FOREIGN KEY(id_categoria) REFERENCES CATEGORIAS(id)
)ENGINE=InnoDb;

CREATE TABLE PEDIDOS(
    id INT(255) AUTO_INCREMENT NOT NULL,
    id_usuario INT(255)  NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    localidad VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    coste float(200,2) NOT NULL,
    estado VARCHAR(20),
    fecha DATE,
    hora TIME,
    CONSTRAINT pk_id_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_id_usuario FOREIGN KEY(id_usuario) REFERENCES USUARIOS(id)
)ENGINE=InnoDb;

CREATE TABLE LINEASPEDIDOS(
    id INT(255) AUTO_INCREMENT NOT NULL,
    id_pedido INT(255) NOT NULL,
    id_producto INT(255) NOT NULL,
    CONSTRAINT pk_id_lineaspedidos PRIMARY KEY(id),
    CONSTRAINT fk_id_pedido FOREIGN KEY(id_pedido) REFERENCES PEDIDOS(id),
    CONSTRAINT fk_id_producto FOREIGN KEY(id_producto) REFERENCES PRODUCTOS(id)
)ENGINE=InnoDb;