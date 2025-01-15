use lacos2;

create table usuarios(
id smallint auto_increment primary key,
nome varchar(255),
nascimento date,
numero varchar(11),
cpf varchar(11),
email varchar(255),
senha varchar(20)
);

show tables