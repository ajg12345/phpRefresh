create table users(
uid int AUTO_INCREMENT primary key,
first text not null,
last text not null,
email text not null,
pwd text not null
);

insert into users(first, last, email, pwd)
values('Aaron', 'Glynn', 'aglynn', 'apple');