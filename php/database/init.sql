create database portfolio;

use portfolio;

create table servicos(
    id int auto_increment primary key,
    sobre text,
    icon varchar(255)
);

insert into servicos values(0,'Desenvolvimento/manutenção de aplicativos mobile', 'fa fa-mobile');
insert into servicos values(0,'Desenvolvimento/manutenção de sistemas Web', 'fa fa-desktop');
insert into servicos values(0,'Desenvolvimento/manutenção de sistemas Desktop', 'fa fa-laptop');
insert into servicos values(0,'Gerência de sites,sistemas e banco de dados', 'fa fa-area-chart');

create table empresas(
    id int auto_increment primary key,
    nome varchar(255),
    ramo varchar(255)
);

create table projetos(
    id int auto_increment primary key,
    titulo varchar(255),
    sobre text,
    status varchar(255),
    foto text,
    video text,
    data_inicio date,
    data_fim date,
    servico_id integer,
    empresa_id integer,
    foreign key(servico_id) references servicos(id),
    foreign key(empresa_id) references empresas(id)
);