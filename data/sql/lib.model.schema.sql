
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- pelicula
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pelicula`;


CREATE TABLE `pelicula`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`summary` TEXT  NOT NULL,
	`premiere_date` DATE  NOT NULL,
	`photo` VARCHAR(255)  NOT NULL,
	`slug` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `pelicula_U_1` (`name`),
	UNIQUE KEY `pelicula_U_2` (`photo`),
	UNIQUE KEY `pelicula_U_3` (`slug`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- raza
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `raza`;


CREATE TABLE `raza`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`summary` TEXT  NOT NULL,
	`slug` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `raza_U_1` (`name`),
	UNIQUE KEY `raza_U_2` (`slug`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- personaje
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `personaje`;


CREATE TABLE `personaje`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`summary` TEXT  NOT NULL,
	`raza_id` INTEGER  NOT NULL,
	`photo` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `personaje_U_1` (`name`),
	UNIQUE KEY `personaje_U_2` (`photo`),
	INDEX `personaje_FI_1` (`raza_id`),
	CONSTRAINT `personaje_FK_1`
		FOREIGN KEY (`raza_id`)
		REFERENCES `raza` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- participacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `participacion`;


CREATE TABLE `participacion`
(
	`personaje_id` INTEGER,
	`pelicula_id` INTEGER,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `participacion_FI_1` (`personaje_id`),
	CONSTRAINT `participacion_FK_1`
		FOREIGN KEY (`personaje_id`)
		REFERENCES `personaje` (`id`)
		ON DELETE CASCADE,
	INDEX `participacion_FI_2` (`pelicula_id`),
	CONSTRAINT `participacion_FK_2`
		FOREIGN KEY (`pelicula_id`)
		REFERENCES `pelicula` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
