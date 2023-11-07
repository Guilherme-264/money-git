create table pago(
ID int not null primary key auto_increment,
valor int,
receptor varchar(20),
descricao varchar(100),
data_pago date
);