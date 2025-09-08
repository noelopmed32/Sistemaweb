-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.4.3 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bd_logins
DROP DATABASE IF EXISTS `bd_logins`;
CREATE DATABASE IF NOT EXISTS `bd_logins` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bd_logins`;

-- Volcando estructura para tabla bd_logins.crudindepediente
DROP TABLE IF EXISTS `crudindepediente`;
CREATE TABLE IF NOT EXISTS `crudindepediente` (
  `idcrudindepediente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `contrato` varchar(50) DEFAULT NULL,
  `saldos` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `numerotelefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcrudindepediente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla bd_logins.crudindepediente: ~0 rows (aproximadamente)
REPLACE INTO `crudindepediente` (`idcrudindepediente`, `nombre`, `contrato`, `saldos`, `fecha`, `numerotelefono`) VALUES
	(1, 'Noe Lopez Medina', 'fijo', '47512', '14/05/1991', '7751196882');

-- Volcando estructura para tabla bd_logins.horarios
DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `idhorarios` int NOT NULL AUTO_INCREMENT,
  `entrada` varchar(50) DEFAULT NULL,
  `salida` varchar(50) DEFAULT NULL,
  `idusuario` int DEFAULT NULL,
  UNIQUE KEY `idhorarios` (`idhorarios`),
  UNIQUE KEY `idusuario` (`idusuario`),
  CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`idhorarios`) REFERENCES `crudindepediente` (`idcrudindepediente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `login` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla bd_logins.horarios: ~1 rows (aproximadamente)
REPLACE INTO `horarios` (`idhorarios`, `entrada`, `salida`, `idusuario`) VALUES
	(1, '01:55', '01:55', NULL);

-- Volcando estructura para tabla bd_logins.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tokenUser` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idusuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla bd_logins.login: ~2 rows (aproximadamente)
REPLACE INTO `login` (`idusuario`, `nombre`, `email`, `password`, `tokenUser`, `estado`) VALUES
	(1, 'Urian Viera ', 'iamdeveloper86@gmail.com', '123', NULL, NULL),
	(18, 'Web Developer', 'programadorphp2017@gmail.com', '12345', NULL, NULL),
	(23, 'NOE', 'noe15lm@hotmail.es', 'kondor', NULL, 'Activo'),
	(24, 'Daniel Lopez Garcia', 'Daniel@gmail.com', 'kondor12', NULL, 'Baja'),
	(25, 'Juan', 'juan@gmail.com', 'kondor14', NULL, 'Activo');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
