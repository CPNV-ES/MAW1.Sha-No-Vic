-- MySQL Script generated by MySQL Workbench
-- Fri Nov 17 11:44:36 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema exercise_looper
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exercise_looper
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exercise_looper` DEFAULT CHARACTER SET utf8 ;
USE `exercise_looper` ;

-- -----------------------------------------------------
-- Table `exercise_looper`.`exercises`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercise_looper`.`exercises` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` TINYTEXT NOT NULL,
  `state` ENUM('building', 'answering', 'closed') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercise_looper`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercise_looper`.`questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `exercises_id` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `type` ENUM('single_line', 'single_line_list', 'multi_line') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_questions_exercises1_idx` (`exercises_id` ASC) VISIBLE,
  CONSTRAINT `fk_questions_exercises1`
    FOREIGN KEY (`exercises_id`)
    REFERENCES `exercise_looper`.`exercises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercise_looper`.`fulfillments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercise_looper`.`fulfillments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `timestamp` TINYTEXT NULL,
  `exercises_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_fulfillments_exercises_idx` (`exercises_id` ASC) VISIBLE,
  CONSTRAINT `fk_fulfillments_exercises`
    FOREIGN KEY (`exercises_id`)
    REFERENCES `exercise_looper`.`exercises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercise_looper`.`answers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercise_looper`.`answers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `questions_id` INT NOT NULL,
  `fulfillments_id` INT NOT NULL,
  `answer` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_questions_has_fulfillments_fulfillments1_idx` (`fulfillments_id` ASC) VISIBLE,
  INDEX `fk_questions_has_fulfillments_questions1_idx` (`questions_id` ASC) VISIBLE,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  CONSTRAINT `fk_questions_has_fulfillments_questions1`
    FOREIGN KEY (`questions_id`)
    REFERENCES `exercise_looper`.`questions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_questions_has_fulfillments_fulfillments1`
    FOREIGN KEY (`fulfillments_id`)
    REFERENCES `exercise_looper`.`fulfillments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
