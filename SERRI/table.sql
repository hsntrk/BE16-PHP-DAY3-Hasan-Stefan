create table `user`(
	id int AUTO_INCREMENT PRIMARY KEY,
    first_name char(50) not null,
    last_name char(50) not null,
    email char(100) not null UNIQUE KEY,
    picture char(100),
    `status` enum("user", "admin") DEFAULT "user"
)