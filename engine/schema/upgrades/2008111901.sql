 CREATE TABLE  IF NOT EXISTS `prefix_private_settings` (
	`id` INT NOT NULL ,
	`entity_guid` INT NOT NULL ,
	`name` VARCHAR( 32 ) NOT NULL ,
	`value` TEXT NOT NULL ,
	PRIMARY KEY ( `id` ) ,
	INDEX ( `entity_guid` , `name` )
) ENGINE = MYISAM  DEFAULT CHARSET=utf8;