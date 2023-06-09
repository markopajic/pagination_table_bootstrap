
CREATE DATABASE db;

USE db;


CREATE TABLE `employees` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	`position` VARCHAR(50),
	`office` VARCHAR(50),
	`age` INT,
	`startDate` DATE,
	`salary` INT,
	PRIMARY KEY (`id`)
);

INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Tiger Nixon','System Architect','Edinburgh',61,'2011/04/25',320800);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Garrett Winters','Accountant','Tokyo',63,'2011/07/25',170750);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Ashton Cox','Junior Technical Author','San Francisco',66,'2009/01/12',86000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Cedric Kelly','Senior Javascript Developer','Edinburgh',22,'2012/03/29',433060);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Airi Satou','Accountant','Tokyo',33,'2008/11/28',162700);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Brielle Williamson','Integration Specialist','San Francisco',59,'2012/12/02',372000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Herrod Chandler','Sales Assistant','San Francisco',59,'2012/08/06',372000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Rhona Davidson','Integration Specialist','Tokyo',55,'2010/10/14',327900);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Colleen Hurst','Javascript Developer','San Francisco',39,'2009/09/15',205500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Sonya Frost','Software Engineer','Edinburgh',23,'2008/12/13',103600);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jena Gaines','Office Manager','London',30,'2008/12/19',90560);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Quinn Flynn','Support Lead','Edinburgh',22,'2013/03/03',342000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Charde Marshall','Regional Director','San Francisco',36,'2008/10/16',470600);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Haley Kennedy','Senior Marketing Designer','London',43,'2012/12/18',313500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Tatyana Fitzpatrick','Regional Director','London',19,'2010/03/17',385750);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Michael Silva','Marketing Designer','London',66,'2012/11/27',198500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Paul Byrd','Chief Financial Officer (CFO)','New York',64,'2010/06/09',725000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Gloria Little','Systems Administrator','New York',59,'2009/04/10',237500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Bradley Greer','Software Engineer','London',41,'2012/10/13',132000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Dai Rios','Personnel Lead','Edinburgh',35,'2012/09/26',217500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jenette Caldwell','Development Lead','New York',30,'2011/09/03',345000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Yuri Berry','Chief Marketing Officer (CMO)','New York',40,'2009/06/25',675000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Caesar Vance','Pre-Sales Support','New York',21,'2011/12/12',106450);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Doris Wilder','Sales Assistant','Sidney',23,'2010/09/20',85600);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Angelica Ramos','Chief Executive Officer (CEO)','London',47,'2009/10/09',100000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Gavin Joyce','Developer','Edinburgh',42,'2010/12/22',92575);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jennifer Chang','Regional Director','Singapore',28,'2010/11/14',357650);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Brenden Wagner','Software Engineer','San Francisco',28,'2011/06/07',206850);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Fiona Green','Chief Operating Officer (COO)','San Francisco',48,'2010/03/11',850000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Shou Itou','Regional Marketing','Tokyo',20,'2011/08/14',163000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Michelle House','Integration Specialist','Sidney',37,'2011/06/02',95400);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Suki Burks','Developer','London',53,'2009/10/22',114500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Prescott Bartlett','Technical Author','London',27,'2011/05/07',145000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Gavin Cortez','Team Leader','San Francisco',22,'2008/10/26',235500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Martena Mccray','Post-Sales support','Edinburgh',46,'2011/03/09',324050);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Unity Butler','Marketing Designer','San Francisco',47,'2009/12/09',85675);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Howard Hatfield','Office Manager','San Francisco',51,'2008/12/16',164500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Hope Fuentes','Secretary','San Francisco',41,'2010/02/12',109850);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Vivian Harrell','Financial Controller','San Francisco',62,'2009/02/14',452500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Timothy Mooney','Office Manager','London',37,'2008/12/11',136200);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jackson Bradshaw','Director','New York',65,'2008/09/26',645750);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Olivia Liang','Support Engineer','Singapore',64,'2011/02/03',234500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Bruno Nash','Software Engineer','London',38,'2011/05/03',163500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Sakura Yamamoto','Support Engineer','Tokyo',37,'2009/08/19',139575);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Thor Walton','Developer','New York',61,'2013/08/11',98540);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Finn Camacho','Support Engineer','San Francisco',47,'2009/07/07',87500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Serge Baldwin','Data Coordinator','Singapore',64,'2012/04/09',138575);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Zenaida Frank','Software Engineer','New York',63,'2010/01/04',125250);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Zorita Serrano','Software Engineer','San Francisco',56,'2012/06/01',115000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jennifer Acosta','Junior Javascript Developer','Edinburgh',43,'2013/02/01',75650);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Cara Stevens','Sales Assistant','New York',46,'2011/12/06',145600);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Hermione Butler','Regional Director','London',47,'2011/03/21',356250);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Lael Greer','Systems Administrator','London',21,'2009/02/27',103500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Jonas Alexander','Developer','San Francisco',30,'2010/07/14',86500);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Shad Decker','Regional Director','Edinburgh',51,'2008/11/13',183000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Michael Bruce','Javascript Developer','Singapore',29,'2011/06/27',183000);
INSERT INTO employees(name,position,office,age,startDate,salary) VALUES ('Donna Snider','Customer Support','New York',27,'2011/01/25',112000);
