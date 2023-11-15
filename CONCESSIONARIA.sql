-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema concessionaria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema concessionaria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `concessionaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `concessionaria` ;

-- -----------------------------------------------------
-- Table `concessionaria`.`carro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `concessionaria`.`carro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ano_fabircacao` VARCHAR(45) NOT NULL,
  `quilometragem` INT NOT NULL,
  `combustivel` VARCHAR(45) NOT NULL,
  `cor` VARCHAR(10) NOT NULL,
  `placa` VARCHAR(7) NOT NULL,
  `descricao` VARCHAR(1000) NULL DEFAULT NULL,
  `preco` DOUBLE NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `concessionaria`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `concessionaria`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `concessionaria`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `concessionaria`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
