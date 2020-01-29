
Drop schema if exists  `mydb`;
CREATE schema `mydb`;
USE `mydb`;
SET AUTOCOMMIT=0;

DROP TABLE IF EXISTS `Projects`;
CREATE TABLE `Projects`(
  `Project_number` int(6) NOT NULL AUTO_INCREMENT,
  `Workspace` VARCHAR(30),
  `Description` VARCHAR(30),
  `Client_name` VARCHAR(50),
  `Starting_Date` DATE,
  `Project_name` VARCHAR(30),
  PRIMARY KEY(Project_number)
)ENGINE=InnoDB AUTO_INCREMENT=16;

INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (3, 'Dremel  Variable Speed Rotary Tool', 'Amet phasellus ultricies a praesent. Turpis rutrum mollis!', 'Emily Montoya', '1983-06-04', 'Emily');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (4, 'Positec Usa Inc Rk7867 6" 1/2 Hp Pro Series Bench Grinder', 'Posuere bibendum velit faucibus sed sit eu inceptos.', 'Kolton Ross', '1905-10-30', 'Kolton');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (5, 'Hitachi 4 1/2" 6 Amp Angle Grinder With 5 Abrasive Wheels', 'Risus lacinia diam metus cum sapien sollicitudin? Consectetur!', 'Brody Collier', '1948-04-07', 'Brody');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (6, 'Skil 5995-01 18-volt 5-3/8" Circular Saw', 'Purus nisi purus rutrum praesent dictumst porta dictumst.', 'Jakob Larsen', '1944-04-30', 'Jakob');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (7, 'Black & Decker Matrix Combo Kit, 20v Drill And Jig Saw, Bdcdmt120js', 'Facilisi mus et dui varius sem sapien tortor!', 'Lailah David', '1946-06-25', 'Lailah');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (8, 'Stanley Fatmax 6a Jig Saw, Fme340', 'Pellentesque, porttitor facilisis sagittis ad? Massa luctus ridiculus.', 'Caitlyn Hurst', '1981-01-14', 'Caitlyn');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (9, 'Buffalo Tools 4.8v Cordless Screwdriver', 'Natoque aptent netus vestibulum lobortis mattis ultricies vel!', 'Kyndal Perry', '1937-03-01', 'Kyndal');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (10, 'Black & Decker 12-volt Cordless Air Station Inflator', 'Quam hac dictumst risus nulla. Nascetur sagittis aptent?', 'Brianna Richmond', '1932-11-09', 'Brianna');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (11, 'Black & Decker 7.25" 12.0a Circular Saw, Cs1014', 'Nibh gravida, vehicula torquent maecenas ac risus vel!', 'Norah Reynolds', '1950-02-15', 'Norah');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (12, 'Acme Automotive Typhoon Pro Blow Gun', 'Sapien faucibus scelerisque tempor. Metus, lorem lorem urna.', 'Jadyn Grimes', '1944-04-29', 'Jadyn');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (13, 'Paasche Air Brush Dual Action Airbrush Set', 'Suspendisse feugiat praesent erat quisque libero. Porta tellus.', 'Lexi Phelps', '1938-11-06', 'Lexi');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (14, 'Plews & Edelmann Lever-action Grease Gun, 6" Extension, 6, 000psi, 14oz Cartridge', 'Hendrerit molestie class accumsan platea ullamcorper facilisi enim.', 'Sawyer Mccullough', '1915-10-21', 'Sawyer');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (15, 'Black & Decker 6.5a .5" Vsr 2-speed Hammer Drill, Dr670', 'Mollis cum ornare rhoncus sociis semper rhoncus aptent.', 'Gunnar Padilla', '1933-01-13', 'Gunnar');
INSERT INTO Projects (`Project_number`, `Workspace`, `Description`, `Client_name`, `Starting_Date`, `Project_name`) VALUES (16, 'Dremel Sanding/grinding Mini Accessory Kit, 686-02', 'Cursus, dictum himenaeos litora cursus nunc erat diam?', 'Christian Spencer', '1947-06-01', 'Christian');



DROP TABLE IF EXISTS `software_Field`;
CREATE TABLE `software_Field`(
  `Field_number` INT(6)  NOT null AUTO_INCREMENT,
  `Field_name` VARCHAR(30) NOT NULL,
  `Expertise` VARCHAR (30) NOT NULL,
  PRIMARY KEY(Field_number)
)ENGINE=innodb  AUTO_INCREMENT=17;

INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (1, 'Crawford Storehorse 36" Sawhorse W/top Protector', 'Volutpat, dictumst sollicitudin sociosqu vel hac curabitur. Lacus cum habitant.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (2, 'Rikon 1.2 Amp 120 V 16 Scroll Saw', 'Natoque magna, adipiscing ultricies posuere. Felis iaculis class morbi tempor.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (3, 'Black & Decker 109-piece Basic Project Set, 71-0109', 'Auctor magna auctor montes risus consequat tempor senectus pharetra. Eros.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (4, 'Dewalt Power Tools . 38inch Heavy-duty Vsr Pistol Grip Drill With Keyless Chuck Dwd', 'Nostra, risus penatibus ipsum! Taciti malesuada montes primis augue. Viverra.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (5, 'Ingersoll Rand 107xpa 3/8-inch Drive Air Ratchet', 'Metus fringilla amet massa ut montes lorem commodo dictumst. Feugiat.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (6, 'Black And Decker 20v Max Lithium Drill And Recip Saw Kit, Bdcd220rs', 'Congue libero porta etiam amet ultrices. Cum leo metus nullam.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (7, 'Vermont American 7 To 7-1/4 Masonry Circular Saw Blades 28052', 'Molestie parturient vehicula hendrerit tempus velit cursus interdum tempor. Aliquet.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (8, 'Bostitch Air Tool Inline Lubricator, 1/4 Npt, Btfp72641', 'Porta vehicula hendrerit euismod tempus id. Tempus nibh id faucibus.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (9, 'Buffalo Tools 19 Piece Hole Saw Set', 'Potenti fermentum egestas mus, arcu arcu ad fusce dignissim justo.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (10, 'Rockwell Shopseries 4.3 Amp Belt/disk Sander', 'Praesent integer, sociis ligula nec mi magnis dolor. Auctor nam!');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (11, 'Eclipse Pz3x1-15/16 Bit Pozidrive Size 3 1-15/16in Long 1/4in Hex', 'Vivamus placerat augue penatibus justo risus, ultricies vestibulum nulla vestibulum!');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (12, 'Drill America 3/16-1/2x16ths Step Drill Bit', 'Malesuada elementum natoque diam. Curabitur tellus lacinia mollis sodales nullam.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (13, 'Black And Decker 20v Max Lithium Drill And Recip Saw Kit, Bdcd220rs', 'Bibendum in mauris massa aliquam euismod primis. At erat consequat.');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (14, 'Dixon Valve Air Chief Industrial Quick Connect Fittings - Dc25 Septls238dc25', 'Ornare vivamus hendrerit, sem tempor. Ligula mattis elit molestie turpis?');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (15, 'Bosch Power Tools 3/16 X 6 Bluegranite Industrial Hammer Drill Bits Hcbg04', 'Nec donec netus risus. Convallis nam molestie malesuada. Sagittis, potenti!');
INSERT INTO software_Field (`Field_number`, `Field_name`, `Expertise`) VALUES (16, 'Primefit Garage Tire Inflator With 12" Hose', 'Faucibus ad egestas curabitur vestibulum. Eleifend est diam faucibus aenean.');

DROP TABLE IF EXISTS `Engineer`;
CREATE TABLE `Engineer`(
`ID` INT (6)  NOT NULL AUTO_INCREMENT,
`Birth_date` DATE,
`Phone_number` VARCHAR(30),
`FName` VARCHAR(50),
`LName` VARCHAR(50),
`Age` INT(6),
`Field_number` INT(6)  NOT null,
PRIMARY KEY(ID),
FOREIGN KEY(Field_number) REFERENCES software_Field(Field_number)ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=innodb  AUTO_INCREMENT=17;

INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (1, '1933-08-22', '(430) 587-1575',1,'amit','toto',1);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (2, '1934-09-22', '(360) 562-2735',2,'haim','togo',2);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (3, '1904-01-15', '(845) 550-7780',3,'roni','dogo',3);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (4, '1953-02-22', '(412) 100-3547',4,'adi','eogo',4);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (5, '1937-04-09', '(770) 659-5336',5,'yarden','rogo',5);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (6, '1996-09-19', '(770) 278-1928',6,'tal','rdgo',6);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (7, '1949-12-18', '(909) 184-5178',7,'chen','rdeo',7);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (8, '1982-01-10', '(646) 786-3933',8,'momo','soso',8);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (9, '1918-03-02', '(612) 865-7346',9,'gogo','popo',9);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (10, '1983-12-10', '(718) 728-6017',10,'yaron','toko',10);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (11, '1913-02-11', '(903) 489-3978',11,'zahi','youo',11);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (12, '1912-03-26', '(331) 521-7620',12,'yaniv','roro',12);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (13, '1910-09-21', '(407) 523-9161',13,'ran','fofo',13);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (14, '1964-05-05', '(608) 605-0735',14,'shir','wowo',14);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (15, '1950-06-08', '(606) 846-0958',15,'benzi','zizi',15);
INSERT INTO Engineer (`ID`, `Birth_date`, `Phone_number`, `Age`,`FName`,`LName`,`Field_number`) VALUES (16, '1945-11-11', '(909) 727-3623',16,'yosi','koko',16);
COMMIT;

DROP TABLE IF EXISTS `milestone`;
CREATE TABLE `milestone`(
  `Submission` VARCHAR(30) NOT NULL,
  `Received_Amount` INT (6),
    `date` Date,
  `Project_number` int(6) NOT NULL,
PRIMARY KEY(Project_number)
)ENGINE=innodb;

INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Ante potenti in nisi. Orci nascetur imperdiet sociis, molestie eu dictum sem eu duis ad mi varius. Eu in aliquam aptent congue eleifend faucibus molestie euismod!', 1123, 1,'2018-08-22');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Magna luctus penatibus viverra morbi inceptos. Quisque aptent, sociosqu mollis. Class per tincidunt lectus! Sit parturient feugiat enim at pretium himenaeos convallis libero metus tristique aliquam!', 2345, 2,'2018-02-22');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Ante imperdiet odio mollis vestibulum posuere facilisi. Mauris duis aliquam sit suspendisse, eget aenean nulla nec ultrices mauris nullam. Convallis justo class tellus leo convallis iaculis?',1233, 3,'2018-11-11');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Non tempus consequat hendrerit donec sociosqu rutrum lacus habitant potenti rhoncus mattis. Vestibulum metus consequat parturient molestie lorem cum ac malesuada massa potenti hac curae;. Purus.', 4534, 4,'2018-06-08');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Suspendisse tellus, nibh cum venenatis. Cursus dis praesent sapien vulputate. Sit donec curabitur mattis rutrum. Conubia vel senectus diam ad consequat elementum. Vehicula sit primis sollicitudin.', 5345, 5,'2018-09-21');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Aenean nunc posuere litora leo maecenas! Nisi erat justo sociosqu eleifend inceptos eu, metus cursus convallis. Pharetra semper condimentum faucibus. Luctus, hac sociis arcu. In venenatis!', 12346, 6,'2018-03-26');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Etiam cras metus erat consectetur venenatis! Vivamus gravida ridiculus sollicitudin aptent. Mi hac natoque, taciti auctor aptent? Vel congue curae; ridiculus eu. Quis nullam tincidunt consequat.', 1227, 7,'2018-01-10');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Aenean phasellus platea nunc magna magna eu penatibus vitae massa ad. Placerat sodales scelerisque sed praesent non. Malesuada fames luctus non mus nulla pellentesque parturient tempor.', 8443, 8,'2018-02-11');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Metus nullam venenatis neque pretium suspendisse sed elementum consequat elementum diam? Feugiat ultrices cursus condimentum dui mattis parturient aliquet hendrerit taciti pretium. Quis tortor porta fermentum.', 1239, 9,'2018-04-12');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Enim, phasellus suspendisse mus commodo condimentum tempus nam vivamus nullam ut sem varius. Vehicula vehicula arcu aliquet. Blandit, eros semper magna. Ligula in ipsum lorem ultrices.', 10122, 10,'2018-04-11');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Laoreet maecenas mus integer hac dictum? Lorem feugiat euismod bibendum litora magna viverra. Sit orci lacus interdum condimentum viverra donec laoreet congue ut? Sociis donec tortor.', 11413, 11,'2018-09-01');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Rutrum natoque ullamcorper platea accumsan interdum himenaeos parturient quisque pharetra! Cum auctor convallis ante facilisi, turpis malesuada adipiscing gravida dui. Et convallis fusce augue convallis. Dictumst?', 122123, 12,'2018-01-09');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Eu volutpat nec bibendum venenatis venenatis laoreet nam sociosqu faucibus sapien netus sit! Gravida dui fusce vulputate. Ornare feugiat primis mauris enim sed lectus arcu ad.', 13895, 13,'2018-06-06');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Auctor suspendisse, porta himenaeos platea curae; placerat. Montes rutrum cras ridiculus diam enim at ultrices sociosqu phasellus. Fringilla iaculis molestie aliquam ornare tellus. Justo euismod porta.', 14456, 14,'2018-03-01');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Dolor mollis netus elementum facilisis venenatis potenti consectetur taciti dapibus feugiat vel. Aenean suscipit proin risus maecenas cras faucibus. Vestibulum augue odio vitae mauris dignissim euismod.', 155445, 15,'2018-04-20');
INSERT INTO milestone (`Submission`, `Received_Amount`, `Project_number`,`date`) VALUES ('Vitae neque magna class ultrices conubia sollicitudin commodo auctor fames ligula sociis etiam. Luctus lectus conubia fermentum curabitur elit ullamcorper. Mauris vulputate duis sed mi convallis.', 16122, 16,'2018-04-06');
COMMIT;


DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`(
  `City` VARCHAR(30) NOT NULL,
	`State` VARCHAR(30) NOT NULL,
  `Street_number` int(6),
  `Street_name` VARCHAR(30),
	`ID`  INT (6)  NOT NULL,
  FOREIGN KEY(ID) REFERENCES Engineer(ID)ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=innodb  AUTO_INCREMENT=16;

INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('2661','Higgins','Portland', 'United States', 1);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('245', 'Elizabeth','Ann Arbor', 'United States', 2);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('9614', 'Oakwood','Lincoln', 'United States', 3);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('1539','Sayre','Des Moines', 'United States', 4);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('9361','Mccrea','Columbia', 'United States', 5);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('3543', 'Bryn Mawr','Glendale', 'United States', 6);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('4565' ,'I57 111th St','Kansas City', 'United States', 7);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('8579', 'Berenice','Cary', 'United States', 8);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('2894', 'Parnell','Clarksville', 'United States', 9);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('5806' ,'Memory','Chandler', 'United States', 10);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('5966' ,'Kennedy Western Av','Portland', 'United States', 11);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('7706' ,'Leamington','Chattanooga', 'United States', 12);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('1103','Leamington','Stamford', 'United States', 13);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('5721', 'Loyola','Austin', 'United States', 14);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('7707' ,'Ross','Jacksonville', 'United States', 15);
INSERT INTO address (`Street_number`,`Street_name`,`City`, `State`, `ID`) VALUES ('4508' ,'Fulton','Jackson', 'United States', 16);

DROP TABLE IF EXISTS `Grade`;
CREATE TABLE `Grade`(
  `Grades` int(6) DEFAULT 0,
  `ID`  INT (6),
  `date_Grade` date,
  `Project_number` int(6) NOT NULL,
  FOREIGN KEY(ID) REFERENCES Engineer(ID) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=innodb;


INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (1,1,1,'1933-08-22');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (4,2,2,'1991-01-04');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (3,2,3,'1992-06-22');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (8,4,9,'1991-04-13');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (6,5,5,'1990-07-24');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (10,6,9,'1991-04-06');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (5,7,7,'1994-06-16');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (3,2,8,'1989-04-24');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (6,9,9,'1992-03-23');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (2,10,10,'1991-01-08');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (8,11,11,'1993-03-01');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (10,12,12,'1989-04-16');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (1,13,13,'2003-08-13');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (4,14,14,'1996-04-05');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (8,15,15,'1991-03-16');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (9,16,16,'1995-04-05');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (9,16,4,'2002-05-08');
INSERT INTO Grade (`Grades`,`ID`,`Project_number`,`date_Grade`) VALUES (9,15,16,'2008-08-08');

DROP TABLE IF EXISTS `Development_tools`;
CREATE TABLE `Development_tools`(
`Configuration_Management` VARCHAR(6) NOT NULL,
`Task_management` VARCHAR(30) NOT NULL,
`designing_tools` VARCHAR(30) NOT NULL,
`Requirements_management` VARCHAR(30) NOT NULL,
`Encoding` VARCHAR(30) NOT NULL,
`Unit_tests` VARCHAR(30) NOT NULL,
`Software_testing` VARCHAR(30) NOT NULL,
`Project_number` INT (6) NOT NULL,
PRIMARY KEY(Project_number)
)ENGINE=innodb;

INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('GIT','Centrallo','ADMINISTRATOR','Introduction','#C','TBrun','Katalon Studio',1);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Freshdesk','easynote.io','PLATFORMA','Introduction','C','Parasoft','UFT',2);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Slack','MeisterTask','USEPASTEL','Introduction','C++','Cantata ','Tricentis Tosca Testsuite',3);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('monday.com','Pintask','GETBASEUI','Introduction','Java','xUnit','Worksoft Certify',4);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Aha!','Todo Cloud','PLANT','Introduction','PHP','Parasoft','Ranorex',5);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Paymo','Todoist','THEMEZAA','Introduction','html5','TBrun','Parasoft SOAtest',6);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Confluence','TrackingTime','SKETCHFLOWKIT','Introduction','#C','Parasoft','Katalon Studio',7);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Smartsheet','Trello','PLANT','Introduction','#C','Cantata','UFT',8);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Targetprocess','Centrallo','PLATFORMA','Introduction','Java','Cantata','Worksoft Certify',9);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Procore','Pintask','GETBASEUI','Introduction','JS','xUnit','Tricentis Tosca Testsuite',10);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Slack','easynote.io','PLANT','Introduction','JS','Parasoft','Katalon Studio',11);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Paymo','easynote.io','USEPASTEL','Introduction','C++','TBrun','Tricentis Tosca Testsuite',12);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('GIT','Todoist','THEMEZAA','Introduction','C','xUnit','Katalon Studio',13);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Freshdesk','MeisterTask','ADMINISTRATOR','Introduction','Java','TBrun','Parasoft SOAtest',14);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Aha!','Todo Cloud','ADMINISTRATOR','Introduction','PHP','xUnit','UFT',15);
INSERT INTO Development_tools (`Configuration_Management`,`Task_management`,`designing_tools`,`Requirements_management`,`Encoding`,`Unit_tests`,`Software_testing`,`Project_number`) VALUES ('Procore','Trello','SKETCHFLOWKIT','Introduction','#C','Cantata','Parasoft SOAtest',16);






 SET AUTOCOMMIT=1;
