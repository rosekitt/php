create table phj_member (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    address char(80),
    regist_day char(20),
    level int,
    point int,
    primary key(num)
);