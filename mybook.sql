use mybook;

CREATE TABLE users
(
	userId int auto_increment NOT NULL,
	fname varchar (200),
	lname varchar(200),
	email varchar(200),
	pword varchar(25),
	primary key(userId)
);

CREATE TABLE post
(
	postId int auto_increment NOT NULL,
	title varchar(50),
	post_type varchar(25),
	image_path varchar(50),
	text_body varchar(500),
	primary key(postId)
);

CREATE TABLE groups
(
	groupId int auto_increment NOT NULL,
	group_name varchar(25),
	group_owner int NOT NULL,
	primary key(groupId),
	FOREIGN KEY (group_owner) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE comments
(
	commentId int auto_increment NOT NULL,
	content varchar(500),
	primary key(commentId)
);

CREATE TABLE group_post
(
	gpostId int auto_increment NOT NULL,
	title varchar(50),
	g_post_type varchar(25),
	g_image_path varchar(50),
	text_body varchar(500),
	primary key(gpostId)
);

CREATE TABLE profile
(
	userId int auto_increment NOT NULL,
	fname varchar(50),
	lname varchar(50),
	email varchar(50),
	dob DATE,
	profile_pic varchar(50),
	primary key(userId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE creates
(
	postId int auto_increment NOT NULL,
	userId int NOT NULL,
	date_created DATETIME,
	primary key(userId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(postId) REFERENCES post(postId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE comments_on
(
	postId int auto_increment NOT NULL,
	userId int  NOT NULL,
	commentId int NOT NULL,
	date_commented DATETIME,
	primary key(postId,userId,commentId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(postId) REFERENCES post(postId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(commentId) REFERENCES comments(commentId) ON UPDATE CASCADE ON DELETE RESTRICT
);

 
CREATE TABLE create_content
(
	userId int NOT NULL,
	groupId int NOT NULL,
	gpostId int auto_increment NOT NULL,
	date_created DATETIME,
	primary key(userId,groupId,gpostId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(groupId) REFERENCES groups(groupId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(gpostId) REFERENCES group_post(gpostId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE add_to_group
(
	userId int auto_increment NOT NULL,
	groupId int NOT NULL,
	date_added DATETIME,
	primary key(userId,groupId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(groupId) REFERENCES groups(groupId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE friend_of
(
	friend int NOT NULL,
	friend_owner int NOT NULL,
	type varchar(20),
	primary key (friend_owner,friend),
	FOREIGN KEY (friend_owner) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (friend) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT

);

CREATE TABLE create_group
(
	groupId int NOT NULL,
	userId int NOT NULL,
	date_created DATETIME,
	primary key (groupId),
	FOREIGN KEY (userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE add_editors_group
(
	group_owner int NOT NULL,
	users_added int NOT NULL ,
	date_added DATETIME,
	primary key(group_owner,users_added),
	FOREIGN KEY(group_owner) REFERENCES groups(group_owner) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(users_added) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);



