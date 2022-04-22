create database proyectoapipokemon;
use proyectoapipokemon;

create table user(
	id int primary key auto_increment,
    username varchar(20) not null,
    email varchar(20) not null,
    password varchar(20) not null
);

alter table user modify column password varchar(100);


select * from user


