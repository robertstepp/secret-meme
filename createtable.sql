CREATE TABLE `settings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `uid` INT(255),
  `background` VARCHAR(255),
  `fontsize` VARCHAR(255),
  `fontcolor` VARCHAR(255),
  PRIMARY KEY  (`id`)
);


ALTER TABLE `settings` ADD CONSTRAINT `settings_fk1` FOREIGN KEY (`uid`) REFERENCES members(`id`);
