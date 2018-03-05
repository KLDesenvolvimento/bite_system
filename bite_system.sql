create database bite_system;

use bite_system;

create table funcionario
(
	
    id_funcionario int primary key auto_increment,
    nome varchar(200) not null,
    usuario varchar(50) not null,
    senha char(32) not null,
    telefone char(13),
    celular char(14) not null,
    email varchar(200) not null unique

);

create table cliente_fisico
(

	id_cliente int primary key auto_increment,
    nome varchar(200) not null,
    cpf char(14) not null unique,
    telefone char(13),
    celular char(14) not null,
    email varchar(200) unique,
    sexo varchar(10),
    cep char(11) not null,
    logradouro varchar(100),
    numero_casa smallint,
    bairro varchar(80),
    cidade varchar(80),
    uf char(2),
    complemento mediumtext

);

create table cliente_juridico
(

	id_cliente int primary key auto_increment,
    razao_social varchar(100) not null unique,
    nome_fantasia varchar(100) not null,
    cnpj char(18) not null unique,
    telefone char(13) not null,
    celular char(14),
    email varchar(200) not null unique
    
);

create table servico
(

	id_servico int primary key auto_increment,
    codigo varchar(20) not null,
    nome_servico varchar(100) not null unique,
    descricao mediumtext not null,
    prc float(10,2) not null

);

create table os
(

	id_os int primary key auto_increment,
    fk_funcionario int not null,
    fk_cliente_fisico int,
    fk_cliente_juridico int,
    qtd_total int not null,
    prc_total float(10,2) not null,
    desconto_total float(10,2) not null
    
);

create table os_prod
(

	id_os_prod int primary key auto_increment,
    fk_os int not null,
    fk_servico int not null,
    qtd_unit int not null,
    prc_unit float(10,2) not null

);

# RELACIONAMENTO DE TABELAS
alter table os add constraint os_funcionario foreign key (fk_funcionario) references funcionario (id_funcionario);
alter table os add constraint os_cliente_fisico foreign key (fk_cliente_fisico) references cliente_fisico (id_cliente);
alter table os add constraint os_cliente_juridico foreign key (fk_cliente_juridico) references cliente_juridico (id_cliente);
alter table os_prod add constraint os_prod_os foreign key (fk_os) references os (id_os);
alter table os_prod add constraint os_prod_servico foreign key (fk_servico) references servico (id_servico);

# INSERÇÕES PADRÕES
insert into funcionario values (NULL, 'Kauan Rodrigues', 'kauan', '2c8f265ba583409b955a19df3e5ebba6', '(81)9598-2036', '(81)99598-2036', 'kauangamertuto@gmail.com');
insert into cliente_fisico values (NULL, 'Consumidor', '999.999.999-99', '(81)9999-9999', '(81)99999-9999', 'consumidor@gmail.com', '52.120-520', '', 0, '', '', '', '');