-- Creación de Base de Datos
CREATE DATABASE `konecta` /*!40100 COLLATE 'utf8_spanish_ci' */;

-- CREAR TABLA DE PRODUCTOS 
CREATE TABLE `PRODUCTOS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(150) NOT NULL,
  `REFERENCIA` VARCHAR(150) NOT NULL,
  `PRECIO` INT NOT NULL,
  `PESO` INT NOT NULL,
  `CATEGORIA` VARCHAR(50) NOT NULL,
  `STOCK` INT NOT NULL,
  `FCH_CREACION` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`)
)
COLLATE='utf8_spanish_ci';


-- Creación de tabla registro de ventas 
CREATE TABLE ventas(
    `id` INT not NULL primary key auto_increment,
    `id_productos` INT not NULL,
    `cantidad` INT not NULL,
    `fch_venta` TIMESTAMP NOT NULL,
    foreign key (id_productos) references productos(id) on delete cascade on update cascade
);



--CONSULTAS ADICIONALES 

-- consulta del producto que más stock tiene.
SELECT ID, NOMBRE, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK 
FROM productos
WHERE STOCK IN (SELECT MAX(STOCK) FROM productos);


-- consulta de ventas que más stock tiene.
SELECT P.ID, P.NOMBRE, P.REFERENCIA, P.PRECIO, P.PESO, P.CATEGORIA, P.STOCK, V.cantidad
FROM productos P
INNER JOIN ventas V ON P.ID = V.id_productos
WHERE V.cantidad IN (SELECT MAX(cantidad) FROM ventas);