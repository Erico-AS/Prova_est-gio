create database Biblioteca;
use Biblioteca;

Create table Livro (
	id int primary key not null auto_increment,
    titulo varchar(200) not null,
    autor varchar(200) not null,
    ano_publicacao year not null
);
-- SELECT * FROM Livro;
-- Truncate table Livro;
-- drop table Livro;