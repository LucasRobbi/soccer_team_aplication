-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema soccer_team_app
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema soccer_team_app
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `soccer_team_app` DEFAULT CHARACTER SET utf8 ;
USE `soccer_team_app` ;

-- -----------------------------------------------------
-- Table `soccer_team_app`.`player`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `soccer_team_app`.`player` (
  `id_player` INT NOT NULL,
  `name_player` VARCHAR(60) NULL,
  `birth_player` DATE NULL,
  `country_player` VARCHAR(45) NULL,
  PRIMARY KEY (`id_player`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `soccer_team_app`.`team`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `soccer_team_app`.`team` (
  `id_team` INT NOT NULL,
  `name_team` VARCHAR(50) NULL,
  `description_team` VARCHAR(500) NULL,
  `website_team` VARCHAR(60) NULL,
  `type_team` TINYINT NULL,
  `tags_team` VARCHAR(500) NULL,
  `formation` INT(4) NULL,
  PRIMARY KEY (`id_team`))
ENGINE = InnoDB
COMMENT = '		';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
