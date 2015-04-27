

DROP DATABASE IF EXISTS db_test;

CREATE DATABASE db_test
  DEFAULT CHARACTER SET 'utf8';

USE db_test;

--
-- TABLE: data_user
--

CREATE TABLE datauser(
  id             INT          AUTO_INCREMENT,
  first_name     CHAR(50)     NOT NULL,
  second_name    CHAR(50)     NOT NULL,
  email          CHAR(128),
  sex            INT          NOT NULL,
  about          CHAR(255),
  foto           CHAR(100),
  login          CHAR(20),
  PRIMARY KEY (id)
)ENGINE=INNODB
;

--
-- TABLE: users
--

CREATE TABLE users(
  login       CHAR(20)    NOT NULL,
  password    CHAR(32)    NOT NULL,
  PRIMARY KEY (login)
)ENGINE=INNODB
;

--
-- INDEX: PK3
--

CREATE UNIQUE INDEX PK3 ON datauser(id)
;
--
-- INDEX: Ref21
--

CREATE INDEX Ref21 ON datauser(login)
;
--
-- INDEX: PK2
--

CREATE UNIQUE INDEX PK2 ON users(login)
;
--
-- TABLE: data_user
--

ALTER TABLE datauser ADD CONSTRAINT Refusers1
FOREIGN KEY (login)
REFERENCES users(login)
;

set names 'utf8';

insert into users (login, password)
values ('admin', '21232f297a57a5a743894a0e4a801fc3');
insert into users (login, password)
values ('user', 'ee11cbb19052e40b07aac0ca060c23ee');

INSERT INTO datauser (first_name, second_name, email, sex, foto, login)
VALUES ('Артем', 'krasn', 'akr@mail.ru', 1, 'images/default.jpg', 'admin');
INSERT INTO datauser (first_name, second_name, email, sex, foto, login)
VALUES ('irina', 'krasn', 'irina@mail.ru', 0, 'images/default.jpg', 'user');