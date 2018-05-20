create database db_login_system;
use db_login_system;

create table users(
	nome varchar(10) not null,
	sobre varchar(10) not null,
	email varchar(50) not null,
	login varchar(20) not null,
	senha varchar(10) not null,
	primary key(login, email, id_login));