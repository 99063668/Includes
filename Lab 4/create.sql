drop database if exists `databank_php`;

create database if not exists `databank_php`;

use `databank_php`;

create table `onderwerpen` (
	`id`  int not null unique primary key auto_increment,
	`name` varchar(255) not null,
	`description` TEXT not null,
	`image` varchar(255) not null
)
engine = InnoDB;
