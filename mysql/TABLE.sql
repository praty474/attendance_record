Create database studentAttendance;
DROP database studentattendance;
use studentAttendance;



CREATE TABLE USER (
USER_ID int	NOT NULL primary key auto_increment,
FIRST_NAME varchar(45)	NOT NULL,
MIDDLE_NAME varchar(45) ,
LAST_NAME varchar(45)	NOT NULL,
DOB date NOT null,
GENDER varchar(10) NOT null,
EMAIL varchar(100) not null,
IS_STUDENT boolean NOT NULL,
COUNTRY varchar (30) NOT NULL,
STATE varchar (30) NOT NULL,
DISTRICT varchar (45) NOT NULL,
STREET varchar (45) NOT NULL
);

CREATE TABLE COURSE(
COURSE_ID INT NOT NULL primary key auto_increment,
COURSE_NAME varchar(100) NOT NULL,
COURSE_DESC mediumtext NOT NULL,
COURSE_CHR INT(20) NOT NULL
);

CREATE TABLE USER_COURSE(
USER_COURSE_ID INT NOT NULL primary key auto_increment,
USER_ID int	NOT NULL,
COURSE_ID INT NOT NULL,
foreign key (USER_ID) references USER(USER_ID),
foreign key (COURSE_ID) references COURSE(COURSE_ID)

);

CREATE TABLE USER_NUMBER(
USER_NUM_ID INT NOT NULL primary key auto_increment,
USER_ID INT	NOT NULL,
CONTACT_NUM bigint(10) NOT NULL,
foreign key (USER_ID) references USER(USER_ID)

);

CREATE TABLE USER_ATTENDANCE(
ATTEN_ID INT NOT null primary key auto_increment,
USER_ID INT	NOT NULL,
DATE date NOT null,
ATTENDANCE varchar(10),
foreign key (USER_ID) references USER(USER_ID)
);

drop table user_attendance;

CREATE TABLE STATIC_DATA(
SD_ID INT	NOT NULL primary key auto_increment,
DATA_TYPE varchar(35) NOT NULL,
DATA_DESC varchar(35) NOT NULL,
DATA_VALUE VARCHAR(35) NOT NULL

);

show tables;				

-- DROP database studentattendance;

DROP TABLE USER;

CALL SP_SELECT_FROM_USER();
call SP_COUNT_STUDENT(@total);
select @total;

CALL SP_INSERT_INTO_USER( 'PRATYUSH', '', 'KAYASTHA', '20000819', 'MALE', 'P.KAYASTHA.PK',true,'','','','' );
CALL SP_INSERT_INTO_USER( 'BIBASH', '', 'KARKI','19991231', 'MALE', 'BIBASH@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'PRABESH', '', 'GUPTA', '20001202', 'MALE', 'PRABESH@GMAIL',true,'','','','' );
CALL SP_INSERT_INTO_USER( 'MANISH', '', 'BASNET', '20001212', 'MALE', 'MANISH@GMAIL',true,'','','','' );
CALL SP_INSERT_INTO_USER( 'SUNIL', 'KUMAR', 'KARKI', '20001207', 'MALE', 'SUNIL@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'AASISH', '', 'POUDEL', '20001205', 'MALE', 'AASISH@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'SANJAY', '', 'CHAUDARY', '20001228', 'MALE', 'SAN@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'ABISHEK', '', 'CHAUDARY', '20001202', 'MALE', 'abhishekchaudhary229@GMAIL.com',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'MANISH', '', 'BISUNKHE', '20001222', 'MALE', 'MAN@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'PRABIN', '', 'RAI', '20001210', 'MALE', 'PRA@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'SANGITA', '', 'KARKI', '20000810', 'FEMALE', 'SAN@GMAIL',true, '','','','' );
CALL SP_INSERT_INTO_USER( 'SINDHU', '', 'ADHIKARI', '20001210', 'FEMALE', 'SIN@GMAIL',true,'','','','' );
CALL SP_INSERT_INTO_USER( 'SABIN', '', 'SAPKOTA', '19970210', 'MALE', 'SAB@GMAIL',false, '','','','' );
CALL SP_INSERT_INTO_USER( 'SUBARNA', '', 'SAPKOTA', '19960210', 'MALE', 'SUB@GMAIL',false, '','','','' );
CALL SP_INSERT_INTO_USER( 'BINIT', '', 'KOIRALA', '19990210', 'MALE', 'BINIT@GMAIL',false, '','','','' );
CALL SP_INSERT_INTO_USER( 'BINIT', '', 'KOIRALA', '19990210', 'MALE', 'BINIT@GMAIL',false, '','','','' );

DELETE FROM user WHERE USER_ID > 24;

ALTER TABLE user AUTO_INCREMENT = 1;



CALL SP_SELECT_FROM_COURSE();
CALL SP_INSERT_INTO_COURSE('DBMS','Database management system', 3);
CALL SP_INSERT_INTO_COURSE('SCRIPTING LANGUAGE','SCRIPTING LANGUAGE', 4);
CALL SP_INSERT_INTO_COURSE('OS','OPERATING SYSTEM', 3);
CALL SP_INSERT_INTO_COURSE('NM','NUMERICAL METHODS', 4);
CALL SP_INSERT_INTO_COURSE('SE','SOFTWARE ENGINEERING', 3);


DELETE FROM COURSE WHERE COURSE_ID > 5;

CALL SP_SELECT_FROM_USER_NUMBER;
CALL SP_INSERT_INTO_USER_NUMBER(1,9861488645);
CALL SP_INSERT_INTO_USER_NUMBER(2,9860488645);
CALL SP_INSERT_INTO_USER_NUMBER(3,9860488645);

delete from user_number where USER_NUM_ID >3;

CALL SP_SELECT_FROM_USER_ATTENDANCE();
CALL SP_INSERT_INTO_USER_ATTENDANCE(3,5, now());

select * from user_attendance where DATE = "2023-06-07";

CALL SP_SELECT_FROM_STATIC_DATA();
CALL SP_SELECT_FROM_USER_COURSE();
 

create table test(
FIRST_NAME varchar(45)	NOT NULL,
MIDDLE_NAME varchar(45) 
);

select * from test;



create view student as select FIRST_NAME, DOB from USER where FIRST_NAME='PRATYUSH';

select * from student;

create view attendance as select USER_ID, DATE, ATTENDANCE from user_attendance where USER_ID = 1;

select * from attendance;




create view view_atten_record as select USER_ID, DATE, ATTENDANCE from user_attendance where USER_ID = USER_ID;

select * from view_atten_record where USER_ID = 1 ;



select * from USER where gender = 'male';