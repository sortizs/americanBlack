-- CREATE DATABASE AMERICANBLACK;
USE AMERICANBLACK;

CREATE TABLE USUARIO
(
ID INT NOT NULL,
NOMBRE VARCHAR(45) NOT NULL,
APELLIDO VARCHAR(45) NULL,
DIRECCION VARCHAR(45) NOT NULL,
TELEFEONO INT NULL,
CORREO VARCHAR(45) NOT NULL,
CLAVE VARCHAR(45) NOT NULL,
TIPO_USUARIO INT(1) NOT NULL,
COD_CARRITO INT NOT NULL,
ESTADO INT NOT NULL,
    PRIMARY KEY (ID)
)ENGINE=INNODB;

CREATE TABLE PRODUCTOS 
(
CODIGO INT NOT NULL,
NOMBRE VARCHAR(45) NOT NULL,
DESCRIPCION VARCHAR(45) NULL,
STOCK INT(10) NOT NULL,
VALOR DECIMAL(2) NOT NULL,
   PRIMARY KEY (CODIGO)
)ENGINE=INNODB;

CREATE TABLE PEDIDOS
(
CODIGO INT NOT NULL,
FECHA DATETIME NOT NULL,
USUARIO_ID INT NOT NULL,
 PRIMARY KEY (CODIGO),
 CONSTRAINT PEDIDO_USUARIO FOREIGN KEY (USUARIO_ID) REFERENCES USUARIO(ID)
)ENGINE=INNODB;

CREATE TABLE DLLE_PRODUCTOS_PEDIDOS 
(
PRODUCTOS_CODIGO INT NOT NULL,
PEDIDOS_CODIGO INT NOT NULL,
PRIMARY KEY (PRODUCTOS_CODIGO, PEDIDOS_CODIGO),
CONSTRAINT PRODUCTOS_HAS_PEDIDOS_PRODUCTOS FOREIGN KEY (PRODUCTOS_CODIGO) REFERENCES PRODUCTOS(CODIGO),
CONSTRAINT PRODUCTOS_HAS_PEDIDOS_PEDIDOS FOREIGN KEY (PEDIDOS_CODIGO) REFERENCES PEDIDOS(CODIGO)
)ENGINE=INNODB;

CREATE TABLE CARRITO
(
COD INT NOT NULL,
COD_PROD INT NOT NULL,
CANTIDAD INT NOT NULL,
 PRIMARY KEY (COD),
 CONSTRAINT CARRITO_HAS_PRODUCTOS FOREIGN KEY (COD_PROD) REFERENCES PRODUCTOS(CODIGO)
)ENGINE=INNODB;

CREATE TABLE FACTURACION 
(
COD INT NOT NULL,
FECHA DATETIME NOT NULL,
COD_CARRITO INT NOT NULL,
TOTAL DECIMAL (2) NOT NULL,
  PRIMARY KEY (COD)
)ENGINE=INNODB;

CREATE TABLE DLLE_FACTURACION_PRODUCTOS
(
  FACTURACION_COD INT NOT NULL,
  PRODUCTOS_CODIGO INT NOT NULL,
  STOCK_PRODUCTOS VARCHAR(45) NOT NULL,
  IVA INT NOT NULL,
  SUB_TOTAL VARCHAR(45) NOT NULL,
  VALOR_TOTAL VARCHAR(45) NULL,
  PRIMARY KEY (FACTURACION_COD, PRODUCTOS_CODIGO),
  CONSTRAINT FACTURACION_HAS_PRODUCTOS_FACTURACION FOREIGN KEY (FACTURACION_COD) REFERENCES FACTURACION (COD),
  CONSTRAINT FACTURACION_HAS_PRODUCTOS_PRODUCTOS FOREIGN KEY (PRODUCTOS_CODIGO) REFERENCES PRODUCTOS (CODIGO)
)ENGINE = INNODB;


