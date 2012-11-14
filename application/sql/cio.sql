-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2012 at 12:58 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `colegio_db`
--
CREATE DATABASE `colegio_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `colegio_db`;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(3, 'alumnos', 'Alumno'),
(4, 'padres', 'Padre'),
(5, 'empleados', 'Empleado'),
(6, 'profesores', 'Profesor'),
(7, 'directores', 'Director');


/*
    Niveles de administración:
      1:  Alumno
      2:  Padre
      3:  Empleado
      4:  Profesor
      5:  Director
      6:  Administrador
  */

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(80) COLLATE utf8_bin NOT NULL,
  `salt` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activation_code` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '0x7f000001', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1349998255, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '0x7f000001', 'arath vel', 'ac75231bffc03e66de09c45f1ccb46cf25c10c0b', NULL, 'nombre@dominio.com', NULL, NULL, NULL, NULL, 1349973219, 1349984450, 1, 'Arath', 'Vel', 'Cio', '321-121-1234');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

--CREATE TABLE IF NOT EXISTS `alumnosasd` (
--  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
--  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
--  `apellido_pat` varchar(60) COLLATE utf8_bin NULL,
--  `apellido_mat` varchar(60) COLLATE utf8_bin NULL,
--  `curp` varchar(40) COLLATE utf8_bin DEFAULT NULL,
--  `fecha_nac` date NOT NULL,
--  `fecha_ingreso` date COLLATE utf8_bin DEFAULT NULL,
--  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NOT NULL,
--  `telefono` varchar(20) COLLATE utf8_bin DEFAULT NOT NULL,
--  `grado` varchar(11) COLLATE utf8_bin DEFAULT NOT NULL,
--  `grupo` varchar(11) COLLATE utf8_bin DEFAULT NOT NULL,
--  PRIMARY KEY (`id`)
--) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5;


CREATE TABLE  `alumnos` (
 `id` MEDIUMINT( 8 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `nombre` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `apellido_pat` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_bin NULL ,
 `apellido_mat` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_bin NULL ,
 `curp` VARCHAR( 40 ) CHARACTER SET utf8 COLLATE utf8_bin NULL ,
 `fecha_nac` DATE NOT NULL ,
 `fecha_ingreso` DATE NULL ,
 `direccion` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `telefono` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_bin NULL ,
 `grado` VARCHAR( 11 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `grupo` VARCHAR( 11 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `alumnos` 
(`id`, `nombre`, `apellido_pat`, `apellido_mat`, `curp`, `fecha_nac`, `fecha_ingreso`, `direccion`, `telefono`, `grado`, `grupo`) VALUES
(1, 'alumno1', 'apellido_pat1', 'apellido_mat1', 'curp1', CURDATE(), CURDATE(), 'direccion1', 'telefono1', 'grado1', 'grupo1'),
(2, 'alumno2', 'apellido_pat2', 'apellido_mat2', 'curp2', CURDATE(), CURDATE(), 'direccion2', 'telefono2', 'grado2', 'grupo2');

-- --------------------------------------------------------

--
-- Table structure for table `alumnos_users`
--

CREATE TABLE IF NOT EXISTS `alumnos_users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `alumno_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5;

--
-- Dumping data for table `alumnos_users`
--

INSERT INTO `alumnos_users` (`id`, `alumno_id`, `user_id`) VALUES
(1, 1, 2),
(2, 2, 6),
(3, 26, 5),
(4, 27, 6);