



create database devtransportes2teste
default character set utf8
default collate utf8_general_ci;

create table `pessoas`(
`Nome completo` varchar(40) not null,
`Email`varchar(40) not null,
`Senha` varchar(40) not null
)default charset = utf8;

create table `veiculos` (
`id` int not null auto_increment,
`placa do veículo` decimal(7) not null,
`Número do chassis` decimal(17) not null,
`Renavam` decimal(11) not null,
`cor do veículo` varchar(20) not null,
`Ano de fabricação` date not null,
primary key (id) 
) default charset = utf8;
