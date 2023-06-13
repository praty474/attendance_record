DELIMITER //
CREATE PROCEDURE SP_SELECT_FROM_USER()
BEGIN
    select * from user;
END //
    
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_INSERT_INTO_USER ( IN FIRST_NAME varchar(45),IN MIDDLE_NAME varchar(45), IN LAST_NAME varchar(45), IN  DOB date, IN  GENDER varchar(10), IN EMAIL varchar(100),  IN IS_STUDENT BOOLEAN, IN COUNTRY varchar(30), IN STATE varchar(30), IN DISTRICT varchar(45), IN STREET varchar(45))
BEGIN
INSERT INTO USER( FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, EMAIL, IS_STUDENT, COUNTRY, STATE, DISTRICT, STREET ) VALUES( FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, EMAIL, IS_STUDENT, COUNTRY, STATE, DISTRICT, STREET );
END
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_SELECT_FROM_COURSE()
BEGIN
    select * from COURSE;
END //
    
DELIMITER ;


DELIMITER //

CREATE PROCEDURE SP_SELECT_FROM_STATIC_DATA()
BEGIN
    select * from static_data;
END //
    
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_SELECT_FROM_USER_ATTENDANCE()
BEGIN
    select * from user_attendance;
END //
    
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_SELECT_FROM_USER_COURSE()
BEGIN
    select * from user_course;
END //
    
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_SELECT_FROM_USER_NUMBER()
BEGIN
    select * from user_number;
END //
    
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_INSERT_INTO_COURSE (IN COURSE_NAME VARCHAR(100), IN COURSE_DESC mediumtext, IN COURSE_CHR INT(20))
BEGIN
INSERT INTO COURSE(COURSE_NAME , COURSE_DESC , COURSE_CHR )VALUES(COURSE_NAME , COURSE_DESC , COURSE_CHR );
END //
DELIMITER ;



DELIMITER //

CREATE PROCEDURE SP_INSERT_INTO_STATIC_DATA (IN DATA_TYPE VARCHAR(35) , IN DATA_DESC  VARCHAR(35) , IN DATA_VALUE  VARCHAR(35) )
BEGIN
INSERT INTO static_data (DATA_TYPE , DATA_DESC , DATA_VALUE )VALUES(DATA_TYPE , DATA_DESC , DATA_VALUE );
END //
DELIMITER ;




DELIMITER //
CREATE PROCEDURE SP_INSERT_INTO_USER_NUMBER  (IN USER_ID int , CONTACT_NUM bigint(10))
BEGIN
INSERT INTO user_number (USER_ID, CONTACT_NUM )VALUES (USER_ID, CONTACT_NUM );
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE SP_INSERT_INTO_USER_ATTENDANCE  (IN USER_ID INT, IN COURSE_ID INT , IN DATE_TIME datetime)
BEGIN
INSERT INTO user_attendance (USER_ID, COURSE_ID, DATE_TIME)VALUES (USER_ID, COURSE_ID, DATE_TIME);
END //
DELIMITER ;



DELIMITER //
CREATE PROCEDURE SP_INSERT_INTO_USER_COURSE(IN USER_ID INT, IN COURSE_ID INT )
BEGIN
INSERT INTO user_course (USER_ID, COURSE_ID)VALUES (USER_ID, COURSE_ID );
END//
DELIMITER ;





DELIMITER //
CREATE PROCEDURE SP_INSERT_FORM( IN FIRST_NAME varchar(45),IN MIDDLE_NAME varchar(45), IN LAST_NAME varchar(45), IN  DOB date, IN  GENDER varchar(10), IN EMAIL varchar(100),  IN IS_STUDENT BOOLEAN, IN COUNTRY varchar(30), IN STATE varchar(30), IN DISTRICT varchar(45), IN STREET varchar(45),in USER_ID int , CONTACT_NUM bigint(10))
BEGIN
    START transaction;
    INSERT INTO USER( FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, EMAIL, IS_STUDENT, COUNTRY, STATE, DISTRICT, STREET ) VALUES( FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, EMAIL, IS_STUDENT, COUNTRY, STATE, DISTRICT, STREET );
    INSERT INTO user_number (USER_ID, CONTACT_NUM )VALUES (last_insert_id(), CONTACT_NUM );
    
END //
    
DELIMITER ;

CALL SP_INSERT_FORM( 'aaa', '', 'KAYASTHA', '20000819', 'MALE', 'P.KAYASTHA.PK',true,'','','','', last_insert_id(),9851098510 );



DELIMITER //
CREATE PROCEDURE SP_COUNT_STUDENT( out total int)
BEGIN
    select count(user_id)
    into total
    from USER 
    where IS_STUDENT = 1
    ;
END //
    
DELIMITER ;


call SP_COUNT_STUDENT(@total);


DELIMITER //
CREATE PROCEDURE SP_COUNT_STUDENTS( out total int)
BEGIN
    select count(user_id)
    into total
    from USER 
    where IS_STUDENT = 1
    
    ;
    select @total;
END //
    
DELIMITER ;
call SP_COUNT_STUDENTS(@total);