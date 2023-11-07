--Para criar  o banco, digite o código "Create database money;"
create table receber(
ID int not null primary key auto_increment,
valor int,
pagador varchar(20),
descricao varchar(100),
data_recebido date,
situacao bool not null
);
