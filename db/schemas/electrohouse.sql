
CREATE TABLE `electrohouse`.`categorias` (`id` INT NOT NULL , `nome` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `electrohouse`.`produtos` (`id` INT NOT NULL , `nome` VARCHAR(255) NOT NULL , `preco` DOUBLE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `produtos` ADD `modelo` VARCHAR(255) NOT NULL AFTER `preco`;
