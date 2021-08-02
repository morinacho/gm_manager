-- MySQL Script generated by MySQL Workbench
-- Sun 01 Aug 2021 09:55:23 PM -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema gm_manager
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gm_manager
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gm_manager` ;
USE `gm_manager` ;

-- -----------------------------------------------------
-- Table `gm_manager`.`user_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`user_type` (
  `user_type_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type_desc` VARCHAR(80) NULL,
  PRIMARY KEY (`user_type_id`),
  UNIQUE INDEX `user_type_id_UNIQUE` (`user_type_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(80) NULL,
  `user_lastname` VARCHAR(80) NULL,
  `user_address` VARCHAR(255) NULL,
  `user_password` VARCHAR(255) NULL,
  `user_email` VARCHAR(255) NULL,
  `user_phone` VARCHAR(80) NULL,
  `user_image` VARCHAR(255) NULL,
  `user_status` TINYINT NULL,
  `user_create_at` DATETIME NULL,
  `user_type_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`, `user_type_id`),
  UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC) ,
  UNIQUE INDEX `user_phone_UNIQUE` (`user_phone` ASC) ,
  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC) ,
  UNIQUE INDEX `user_nickname_UNIQUE` (`user_address` ASC) ,
  INDEX `fk_user_user_type1_idx` (`user_type_id` ASC) ,
  CONSTRAINT `fk_user_user_type1`
    FOREIGN KEY (`user_type_id`)
    REFERENCES `gm_manager`.`user_type` (`user_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`category` (
  `category_idç` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`category_idç`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`fiscal_key`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`fiscal_key` (
  `fiscal_key_id` INT NOT NULL AUTO_INCREMENT,
  `fiscal_key_desc` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`fiscal_key_id`),
  UNIQUE INDEX `fiscal_key_desc_UNIQUE` (`fiscal_key_desc` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`client_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`client_type` (
  `client_type_id` INT NOT NULL AUTO_INCREMENT,
  `client_type_desc` VARCHAR(255) NULL,
  PRIMARY KEY (`client_type_id`),
  UNIQUE INDEX `client_type_id_UNIQUE` (`client_type_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`client` (
  `client_id` INT NOT NULL AUTO_INCREMENT,
  `client_name` VARCHAR(80) NULL,
  `client_lastname` VARCHAR(80) NULL,
  `client_document` VARCHAR(80) NULL,
  `client_phone` VARCHAR(80) NULL,
  `client_address` VARCHAR(255) NULL,
  `client_email` VARCHAR(255) NULL,
  `client_cuil_cuit` VARCHAR(80) NULL,
  `fiscal_key_id` INT NOT NULL,
  `client_type_id` INT NOT NULL,
  PRIMARY KEY (`client_id`, `fiscal_key_id`, `client_type_id`),
  INDEX `fk_client_fiscal_key1_idx` (`fiscal_key_id` ASC) ,
  INDEX `fk_client_client_type1_idx` (`client_type_id` ASC) ,
  UNIQUE INDEX `client_id_UNIQUE` (`client_id` ASC) ,
  CONSTRAINT `fk_client_fiscal_key1`
    FOREIGN KEY (`fiscal_key_id`)
    REFERENCES `gm_manager`.`fiscal_key` (`fiscal_key_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_client_client_type1`
    FOREIGN KEY (`client_type_id`)
    REFERENCES `gm_manager`.`client_type` (`client_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`work_order_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`work_order_type` (
  `work_order_type_id` INT NOT NULL AUTO_INCREMENT,
  `work_order_type_desc` VARCHAR(255) NULL,
  PRIMARY KEY (`work_order_type_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`work_order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`work_order` (
  `work_order_id` INT NOT NULL AUTO_INCREMENT,
  `work_order_honorary` INT NULL,
  `user_id` INT NOT NULL,
  `client_id` INT NOT NULL,
  `work_order_type_id` INT NOT NULL,
  PRIMARY KEY (`work_order_id`, `user_id`, `client_id`, `work_order_type_id`),
  INDEX `fk_work_order_user1_idx` (`user_id` ASC) ,
  INDEX `fk_work_order_client1_idx` (`client_id` ASC) ,
  UNIQUE INDEX `work_order_id_UNIQUE` (`work_order_id` ASC) ,
  INDEX `fk_work_order_work_order_type1_idx` (`work_order_type_id` ASC) ,
  CONSTRAINT `fk_work_order_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `gm_manager`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_work_order_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `gm_manager`.`client` (`client_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_work_order_work_order_type1`
    FOREIGN KEY (`work_order_type_id`)
    REFERENCES `gm_manager`.`work_order_type` (`work_order_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`option`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`option` (
  `option_id` INT NOT NULL,
  `option_desc` VARCHAR(255) NULL,
  `option_icon` VARCHAR(45) NULL,
  `option_url` VARCHAR(255) NULL,
  PRIMARY KEY (`option_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`action`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`action` (
  `action_id` INT NOT NULL AUTO_INCREMENT,
  `action_desc` VARCHAR(255) NULL,
  `action_status` TINYINT NULL DEFAULT 0,
  `action_icon` VARCHAR(45) NULL,
  `option_id` INT NOT NULL,
  PRIMARY KEY (`action_id`, `option_id`),
  UNIQUE INDEX `action_id_UNIQUE` (`action_id` ASC) ,
  INDEX `fk_action_option1_idx` (`option_id` ASC) ,
  CONSTRAINT `fk_action_option1`
    FOREIGN KEY (`option_id`)
    REFERENCES `gm_manager`.`option` (`option_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Opciones que posee los usuarios de acuerdo a su rol';


-- -----------------------------------------------------
-- Table `gm_manager`.`option_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`option_has_user` (
  `option_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `option_has_user_status` TINYINT NULL DEFAULT 0,
  PRIMARY KEY (`option_id`, `user_id`),
  INDEX `fk_option_has_user_user1_idx` (`user_id` ASC) ,
  INDEX `fk_option_has_user_option1_idx` (`option_id` ASC) ,
  CONSTRAINT `fk_option_has_user_option1`
    FOREIGN KEY (`option_id`)
    REFERENCES `gm_manager`.`option` (`option_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_option_has_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `gm_manager`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gm_manager`.`action_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gm_manager`.`action_has_user` (
  `action_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `action_has_user_status` TINYINT NULL DEFAULT 0,
  PRIMARY KEY (`action_id`, `user_id`),
  INDEX `fk_action_has_user_user1_idx` (`user_id` ASC) ,
  INDEX `fk_action_has_user_action1_idx` (`action_id` ASC) ,
  CONSTRAINT `fk_action_has_user_action1`
    FOREIGN KEY (`action_id`)
    REFERENCES `gm_manager`.`action` (`action_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_action_has_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `gm_manager`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

