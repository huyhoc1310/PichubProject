CREATE TABLE users (
  username varchar(20) NOT NULL primary key,
  password varchar(20) NOT NULL,
  email VARCHAR(255) NOT NULL
);

CREATE TABLE albums(
albumID int(5) NOT NULL primary key AUTO_INCREMENT,
albumName varchar(50) NOT NULL,
username varchar(20) NOT NULL,
CONSTRAINT fk_albums_users FOREIGN KEY(username) REFERENCES users(username) ON UPDATE CASCADE
);



CREATE TABLE images(
imageID int(5) NOT NULL primary key AUTO_INCREMENT,
albumID int(5) NOT NULL,
imageFile varchar(200) NOT NULL,
description varchar(400),
username varchar(20) NOT NULL,
CONSTRAINT fk_images_users FOREIGN KEY(username) REFERENCES users(username) ON UPDATE CASCADE,
CONSTRAINT fk_images_albums FOREIGN KEY(albumID) REFERENCES albums(albumID) ON UPDATE CASCADE
);


CREATE TABLE comments (
  commentID int(11) NOT NULL primary key AUTO_INCREMENT ,
  imageID int(5) NOT NULL,
  username varchar(20) NOT NULL,
  content varchar(500) NOT NULL,
  CONSTRAINT fk_comments_users FOREIGN KEY(username) REFERENCES users(username) ON UPDATE CASCADE,
  CONSTRAINT fk_comments_images FOREIGN KEY(imageID) REFERENCES images(imageID) ON UPDATE CASCADE
  );

CREATE TABLE tags (
  imageID int(5) NOT NULL ,
  tagName varchar(50) NOT NULL,
  primary key(imageID,tagName),
CONSTRAINT fk_tags_images FOREIGN KEY(imageID) REFERENCES images(imageID) ON UPDATE CASCADE

);

CREATE TABLE admin (
  adminid int(5) not null auto_increment primary key,
  adminname varchar(50) not null,
  adminpassword varchar(50) not null
);

insert into admin (adminname, adminpassword)
values ('admin', '12345678');

 

