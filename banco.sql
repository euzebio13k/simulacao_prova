create table produto(
    id serial primary key,
    nome varchar(50) not null,
    descricao varchar(255),
    preco decimal(9,2) default 0,
    quantidade int default 0
);