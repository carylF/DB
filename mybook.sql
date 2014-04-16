use mybook;

CREATE TABLE users
(
	userId int auto_increment NOT NULL,
	fname varchar (200),
	lname varchar(200),
	email varchar(200),
	pword varchar(25),
	dob DATE,

	primary key(userId)
);

/*data insertions*/	
	insert into users (fname, lname,email, pword, dob) values("Admin", "Admin", "admin@host.com", "admin123","1993/09/23");
	insert into users (fname, lname, email, pword,dob) values("Shelly-Ann","Gordon", "shelly_biz@yahoo.com", "password1", "1993/09/12");
	insert into users (fname, lname, email, pword,dob) values("Nicole","Johnson", "nikkyj@gmail.com", "password2", "1993/07/22");
	insert into users (fname, lname, email, pword,dob) values("Rosini","Robinson", "sheldonshell@hotmail.com", "password3", "1993/09/12");
	insert into users (fname, lname, email, pword,dob) values("Shantel","Thompson", "shantellee@yahoo.com", "1password4", "1993/04/09");
	insert into users (fname, lname, email, pword,dob) values("Jason","Johnson", "jayjay@gmail.com", "password5", "1993/01/13");
	insert into users (fname, lname, email, pword,dob) values("Damion","Ford", "forditute@yahoo.com", "password6", "1993/03/12");
	insert into users (fname, lname, email, pword,dob) values("Mary-Jane","Jones","berryberry@hotmail.com","password7", "1993/09/12");
	insert into users (fname, lname, email, pword,dob) values("Marcus","Smith","marcus.S@hotmail.com","password8","1993/02/15");
	insert into users (fname, lname, email, pword,dob) values("Andrew","Sham","Adrewshams@hotmail.com","password9", "1993/03/12");
	insert into users (fname, lname, email, pword,dob) values("Breton","Davis","davis.b@hotmail.com","password10", "1993/04/12");
	insert into users (fname, lname, email, pword,dob) values("Oraine","Wallace","rainywallace@hotmail.com","password11", "1993/05/12");
	insert into users (fname, lname, email, pword,dob) values("Jermaine","Flemmings","jrf@hotmail.com","password12", "1993/06/12");
	insert into users (fname, lname, email, pword,dob) values("Salome'","Fransis","S.fransis@hotmail.com","password13", "1993/07/12");
	insert into users (fname, lname, email, pword,dob) values("Amanda","Fransis","amandafrannie@gmail.com","password14", "1993/08/12");
	insert into users (fname, lname, email, pword,dob) values("Darian","Kingsly","KinglyD@yahoo.com","password15", "1993/09/12");
	insert into users (fname, lname, email, pword,dob) values("Tiara","Johnson","tj.johnson@hotmail.com","password16", "1993/10/12");
	insert into users (fname, lname, email, pword,dob) values("Terrie-Lee","Fairweather","fair_Lee@yahoo.com","password17", "1993/11/12");
	insert into users (fname, lname, email, pword,dob) values("Samantha","Smith","SammySmith@gmail.com","password18", "1993/12/12");
	insert into users (fname, lname, email, pword,dob) values("Adrian","Castle","kingcastle@hotmail.com","password19", "1994/01/12");
	insert into users (fname, lname, email, pword,dob) values("Akeel","Brown","Akeel.B.jr@hotmail.com","password20", "1994/02/12");
	insert into users (fname, lname, email, pword,dob) values("Mark","Anthony","markiemark@gmail.com","password21", "1994/03/12");
	insert into users (fname, lname, email, pword,dob) values("Chad","Ford","CFord@yahoo.com","password22", "1994/04/12");
	insert into users (fname, lname, email, pword,dob) values("Anique","Mckie","purpleflower@gmail.com","password23", "1994/05/12");
	insert into users (fname, lname, email, pword,dob) values("Brittany","Knight","BBknight@hotmail.com","password24", "1994/06/12");
	insert into users (fname, lname, email, pword,dob) values("Chad","Bartley","superchad@hotmail.com","password25", "1994/07/12");
	insert into users (fname, lname, email, pword,dob) values("Richard","Carttie","richkid@gmail.com","password26", "1994/08/12");
	insert into users (fname, lname, email, pword,dob) values("Valence","Small","notsosmall@yahoo.com","password27", "1994/09/12");

	


CREATE TABLE post
(
	postId int auto_increment NOT NULL,
	title varchar(50),
	post_type varchar(25),
	image_path varchar(50),
	text_body varchar(500),
	primary key(postId)
);

/*data insertions*/
	insert into post (title,post_type,text_body) values("Keyboards","Text","Who knows how to fix a keyboard ?");
	insert into post (title,post_type,text_body) values("Database Assignment 3","Photo","Can anyone answer this part of the assignment?");
	insert into post (title,post_type,text_body) values("Feeling good","Text","Sigh");
	insert into post (title,post_type,text_body) values("School work .. sigh ","Text","I need to get this work done before 12 or i'm dead D: ");
	insert into post (title,post_type,text_body) values("New penciles !! ","Text","Good news: I have four drawing pencils! Bad news: They're all 6B ._.");
	insert into post (title,post_type,text_body) values("Work smart","Text","work smarter, not harder.");
	insert into post (title,post_type,text_body) values("In google we trust ..","Text","So Google did my homework :)");
	insert into post (title,post_type,text_body) values("Summer 2013","Photo","This is what we were up to last summer :)");
	insert into post (title,post_type,text_body) values("Google","Text","if somebody wanted to hide a dead body, page 2 on any google search would be the perfect place .... noone ever goes there");
	insert into post (title,post_type,text_body) values("Happy Birthday <3","Photo","Happy birthday to the best big sister in the world ^_^ ");
	insert into post (title,post_type,text_body) values("That match though","Text","Can't believethat they won the match");
	insert into post (title,post_type,text_body) values("Free drinks","Text","note to self .. befriend more random females .. can get drinks off trucks for free during carnival");
	insert into post (title,post_type,text_body) values("Carnival!!","Photo","so i found paint in my nose from yesterday ..");
	insert into post (title,post_type,text_body) values("Points standing","Photo","The club is currently leading in the national chess compotision");
	insert into post (title,post_type,text_body) values("Brand new designs","Photo","Check out some of my lates ilustrations guys :D");
	insert into post (title,post_type,text_body) values("Robot Specks","Photo","Much progress is being made on the T90");
	insert into post (title,post_type,text_body) values("UWI's Glory","Photo","The Univerity of the West Indies unveils its research in Canser prevention");
	insert into post (title,post_type,text_body) values("This show tho","Photo","Look at what just happened on G.O.T :O ");



CREATE TABLE groups
(
	groupId int auto_increment NOT NULL,
	group_name varchar(25),
	group_type varchar(25),
	group_description varchar(50),
	group_owner int NOT NULL,
	primary key(groupId),
	FOREIGN KEY (group_owner) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);

/*data insertions*/
	insert into groups (group_name,group_type,group_description,group_owner) values ("Database","Academic","Forum for debaters.","1");
	insert into groups (group_name,group_type,group_description,group_owner) values ("UWI Alumni","Society","Let's stay connected!","10");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Computer Science","Academic","Practice coding here. Challenges weekly","9");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Art Society","Society","Share your talent. Gain inspiration.","20");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Party Central","Entertainment","Hottest events all year round.","30");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Robotics","Academic","Forum for robot enthusiasts.","18");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Chess Society","Interest","Meetings on Thursdays.","25");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Selfie Olympics","Entertainment","1st Let me take a selfie!","13");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Young Achievers Society","Society","Achieve!","2");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Fitness Tips","Instructional","Feel the burn!","27");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Young Writers Association","Society","A rose by any other name...","20");
	insert into groups (group_name,group_type,group_description,group_owner) values ("Designers R Us","Instructional","Gucci,Louis,Fendi,Prada,Vera","21");
	insert into groups (group_name,group_type,group_description,group_owner) values ("UWI Students Guide","Instructional","Welcome Pelicans!","10");


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
	userId int NOT NULL,
	userName varchar(50),
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
	date_created datetime NOT NULL,
	primary key(userId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(postId) REFERENCES post(postId) ON UPDATE CASCADE ON DELETE RESTRICT
);

insert into creates (postId,userId, date_created) values ("4","2","2014-04-16 00:00:00");
insert into creates (postId,userId, date_created) values ("6","7","2014-04-16 00:00:00");



CREATE TABLE comments_on
(
	postId int NOT NULL,
	userId int  NOT NULL,
	commentId int NOT NULL,
	date_commented DATETIME NOT NULL ,
	primary key(postId,userId,commentId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(postId) REFERENCES post(postId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(commentId) REFERENCES comments(commentId) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE create_content
(
	userId int NOT NULL,
	groupId int NOT NULL,
	gpostId int  NOT NULL,
	date_created DATETIME,
	primary key(userId,groupId,gpostId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(groupId) REFERENCES groups(groupId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(gpostId) REFERENCES group_post(gpostId) ON UPDATE CASCADE ON DELETE RESTRICT
);
 



CREATE TABLE add_to_group
(
	userId int NOT NULL,
	groupId int NOT NULL,
	date_added DATETIME NOT NULL,
	primary key(userId,groupId),
	FOREIGN KEY(userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(groupId) REFERENCES groups(groupId) ON UPDATE CASCADE ON DELETE RESTRICT
);



CREATE TABLE friend_of
(
	friend int NOT NULL,
	friend_owner int NOT NULL,
	types varchar(20),
	primary key (friend_owner,friend),
	FOREIGN KEY (friend_owner) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (friend) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT

);



CREATE TABLE create_group
(
	groupId int NOT NULL,
	userId int NOT NULL,
	date_created DATETIME NOT NULL ,
	primary key (groupId),
	FOREIGN KEY (userId) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);



CREATE TABLE add_editors_group
(
	group_owner int NOT NULL,
	users_added int NOT NULL ,
	date_added DATETIME NOT NULL ,
	primary key(group_owner,users_added),
	FOREIGN KEY(group_owner) REFERENCES groups(group_owner) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(users_added) REFERENCES users(userId) ON UPDATE CASCADE ON DELETE RESTRICT
);


DELIMITER //
CREATE PROCEDURE GetFriends(IN userID INT)
BEGIN
SELECT users.fname,users.lname FROM friend_of JOIN users ON friend_of.friend = users.userId WHERE friend_of.friend_owner=userID;
END//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE GetUserPost(IN userID INT)
BEGIN
SELECT post.title, post.text_body FROM post JOIN creates ON post.postId = creates.postId WHERE creates.userId=userID;
END //
DELIMITER;


DELIMITER //
CREATE  PROCEDURE GetGroups(IN userID INT)
BEGIN
SELECT group_name FROM groups WHERE group_owner = userID;
END//
DELIMITER ;


DELIMITER //
CREATE  PROCEDURE GetGroupPosts(IN groupName varchar(30))
BEGIN
SELECT group_post.title,group_post.text_body FROM group_post JOIN create_content JOIN groups ON group_post.gpostId=create_content.gpostId AND groups.groupId=create_content.userId WHERE groups.group_name=groupName;
END//
DELIMITER ;
