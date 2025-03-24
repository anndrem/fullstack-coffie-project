create database coffe_lilBro;
use coffe_lilBro;

create table if not exists tbl_tipo (
id_tipo 	tinyint primary key auto_increment,
titulo 		enum('Almoço','Café') 	not null unique
);

insert into tbl_tipo
(titulo)
values
('Almoço'),
('Café');

create table if not exists tbl_produto (
id_produto 	tinyint primary key auto_increment,
titulo		varchar(244) 	not null,
descricao 	varchar(244),
img			varchar(244)	not null,
preco		decimal(10,2) 	not null,
id_tipo		tinyint,

foreign key (id_tipo) references tbl_tipo(id_tipo)
);

insert into tbl_produto
(titulo, descricao, img, preco, id_tipo)
values 
('café cremoso', 'café muito bom','undraw_breakfast_rgx5.svg', 10.20, 2),
('Filé de Tilapia', 'Peixe frito muito bom','undraw_special-event_hv54.svg', 25.10, 1);

create view vw_ProdutoTipo as
select 
	p.titulo 	as 'produto',
    t.titulo 	as 'tipo',
    p.preco		as 'preco',
    p.descricao as 'descricao'
from 
	tbl_produto p
join 
	tbl_tipo t
on 	t.id_tipo = p.id_tipo;

create table if not exists tbl_nivel (
id_nivel		tinyint primary key auto_increment,
titulo			enum('Adimin', 'Usuario') not null unique key
);

insert into tbl_nivel
(titulo)
values 
('Adimin'),
('Usuario');

create table if not exists tbl_usuario (
id_usuario		tinyint 		primary key,
id_nivel		tinyint			not null,
nome			varchar(244)	not null,
username		varchar(20)		not null unique key,
senha			varchar(20)		not null,
tel				varchar(11)		not null,
email			varchar(244)	not null,

foreign key(id_nivel) references tbl_nivel(id_nivel)
);


