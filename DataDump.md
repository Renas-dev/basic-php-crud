create database crud;

use crud;

create table users (
id int(11) not null auto_increment primary key,
firstname varchar(32),
email varchar(100),
mobile varchar(20),
password varchar(255),
created_at datetime not null default current_timestamp,
updated_at datetime not null default current_timestamp on update current_timestamp
);

select * from users;
