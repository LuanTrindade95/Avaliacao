create database rh_candidatos
	default character set utf8 -- acentuação da lingua portuguesa
		default collate utf8_general_ci; 

-- drop database rh_candidatos; --Exlui o banco existente
INSERT INTO `rh_candidatos`.`candidatos` (`id`, `nome`, `email`, `rg`, `cpf`, `dtnasc`, `sexo`, `telefone`, `cidade`, `nascionalidade`, `idVaga`, `formacao`) VALUES (default, 'Luan Adilson Trindade', 'luan.trindade24@gmail.com', '12121', '12121', '1991-08-16', 'M', '1899646516', 'Adamantina', '12', '1', 'Centro Universitário de Adamantina - UNIFAI');

drop table candidatos;
create table candidatos(
id int not null auto_increment,
nome varchar(30) not null,
email varchar(70) not null,
rg int not null,
cpf int not null,
dtnasc date,
sexo enum("M","F"),
endereço varchar(60),
telefone int not null,
cidade varchar(30),
nascionalidade varchar(20),
idVaga int not null,
formacao longtext,
descricao longtext,
primary key(id)
)default charset = utf8; -- cria a tabela candidatos

create table tecnologias(
id int not null auto_increment,
descricao varchar(250) not null,
primary key(id)
)default charset = utf8; -- cria a tabela tecnologias

create table vagas(
id int not null auto_increment,
descricao varchar(250) not null,
primary key(id)
)default charset = utf8; -- cria a tabela vagas

select * from candidatos;

select * from tecnologias;
INSERT INTO tecnologias VALUES (null, 'HTML');

select * from vagas;
select * from vaga_cargo;


select * from cargo;

SELECT 
				tecnologias.id,
				tecnologias.descricao 
			FROM cargo 
			INNER JOIN tecnologias 
				ON tecnologias.id = cargo.id_tecnologias
			WHERE cargo.id_vagas = 1;

describe candidatos;

describe tecnologias;

describe vagas;

describe cargo;

alter table vagas
	add column tecnologias int;
    
alter table vagas
	add foreign key (tecnologias)
		references tecnologias(id);
        
create table cargo(
id_vagas int,
id_tecnologias int,
CONSTRAINT pk_CE primary key(id_vagas,id_tecnologias)
)default charset = utf8;

truncate table vagas;

drop table cargo;
drop table vagas;
drop table tecnologias;

INSERT INTO cargo (id_vagas,id_tecnologias) values (1,1);

create table cargopretendido(
id_cargopretendido int not null auto_increment,
id_vagas int,
id_tecnologias int,
primary key(id_cargopretendido),
foreign key (id_vagas)
references cargo(id_vagas),
foreign key (id_tecnologias)
references cargo(id_tecnologias)
)default charset = utf8;

drop table if exists vaga_cargo;
create table vaga_cargo(
id_candidatos int not null,
id_tecnologias int not null,
foreign key(id_candidatos) references candidatos(id),
foreign key (id_tecnologias) references tecnologias(id),
primary key( id_candidatos, id_tecnologias )
)default charset = utf8;


alter table vaga_cargo
	add column id_tec int;
    
alter table vaga_cargo
	add	foreign key(id_tec)
		references cargo(id_tecnologias);

select * from vaga_cargo;