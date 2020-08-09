
create  database if not exists  calculatrice;

use calculatrice;


drop table if exists calculatrice;




create table if not exists register
(

    id     int unsigned auto_increment not null,
    prenom varchar(55),
    identifiant varchar(55),
    password  varchar(55),
    confpassword varchar(55),

    constraint pk_register primary key (id),
    constraint uq_prenom_register unique (prenom),
    constraint uq_email_register unique (identifiant)

);


insert into register (prenom,identifiant, password,confpassword)
values ('?','?','?','?');



drop table if exists register;

create table if not exists login
(
    id     int unsigned auto_increment not null,
    identifiant  varchar(55)NOT NULL ,
    password varchar(55) NOT NULL,
        constraint pk_login primary key (id),
    constraint uq_identifiant_login unique (identifiant),
    constraint uq_password_login unique (password)
);

insert into login (identifiant,password)
values ('?','?');

drop table if exists login;








