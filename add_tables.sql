CREATE TABLE `bookmarks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `uid` INT NOT NULL,
  `type` VARCHAR(255) NOT NULL,
  `groupid` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `favicon` VARCHAR(255),
  `nsfw` TINYINT NOT NULL,
  `home` TINYINT NOT NULL,
  `inputtime` TIMESTAMP NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `members` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `hash` VARCHAR(255) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `settings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `uid` INT NOT NULL,
  `background` VARCHAR(255) NOT NULL,
  `fontsize` VARCHAR(6) NOT NULL,
  `fontcolor` VARCHAR(10) NOT NULL,
  PRIMARY KEY  (`id`)
);

ALTER TABLE `bookmarks` ADD CONSTRAINT `bookmarks_fk1` FOREIGN KEY (`uid`) REFERENCES members(`id`);
ALTER TABLE bookmarks ADD UNIQUE (title);
ALTER TABLE bookmarks ADD UNIQUE (url);

ALTER TABLE `settings` ADD CONSTRAINT `settings_fk1` FOREIGN KEY (`uid`) REFERENCES members(`id`);
ALTER TABLE `settings` ADD UNIQUE (uid);

ALTER TABLE `members` ADD UNIQUE (username);
ALTER TABLE `members` ADD UNIQUE (email);
ALTER TABLE `members` ADD UNIQUE (salt);
