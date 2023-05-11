DROP DATABASE IF EXISTS ncaa;
CREATE DATABASE ncaa;
USE ncaa;

DROP TABLE IF EXISTS player;
DROP TABLE IF EXISTS headcoach;
DROP TABLE IF EXISTS ncaateam;
DROP TABLE IF EXISTS transactions;
DROP TABLE IF EXISTS mascot;
DROP TABLE IF EXISTS game;
DROP TABLE IF EXISTS `Regular Season Game`;
DROP TABLE IF EXISTS `Tournament Game`;
DROP TABLE IF EXISTS `Game Highlights`;
DROP TABLE IF EXISTS venue;
DROP TABLE IF EXISTS plays_in;

CREATE TABLE headcoach (
  `Coach ID` INT,
  `First Name` VARCHAR(200),
  `Last Name` VARCHAR(200),
  PRIMARY KEY (`Coach ID`)
);

CREATE TABLE ncaateam (
  `Team ID` INT,
  `Team Name` VARCHAR(200),
  `University` VARCHAR(200),
  `Season Record` VARCHAR(200),
  PRIMARY KEY (`Team ID`)
);

CREATE TABLE player (
  `Player ID` INT,
  `Coach ID` INT,
  `Team ID` INT,
  `Player Name` VARCHAR(200),
  `Height` VARCHAR(200),
  `Jersey Num` INT,
  PRIMARY KEY (`Player ID`),
  FOREIGN KEY (`Coach ID`) REFERENCES headcoach (`Coach ID`),
  FOREIGN KEY (`Team ID`) REFERENCES ncaateam (`Team ID`)
);

CREATE TABLE transactions (
  `Transaction ID` INT,
  `Team ID` INT,
  `Transaction Type` VARCHAR(200),
  `Amount` DECIMAL(10,2),
  `Transaction Desc` VARCHAR(200),
  `Transaction Timestamp` DATETIME,
  PRIMARY KEY (`Transaction ID`),
  FOREIGN KEY (`Team ID`) REFERENCES ncaateam (`Team ID`)
);

CREATE TABLE mascot (
  `Mascot ID` INT,
  `Team ID` INT,
  `Mascot Name` VARCHAR(200),
  `Mascot Type` VARCHAR(200),
  PRIMARY KEY (`Mascot ID`),
  FOREIGN KEY (`Team ID`) REFERENCES ncaateam (`Team ID`) ON DELETE CASCADE
);

CREATE TABLE venue (
  `Venue ID` INT,
  `Venue City` VARCHAR(200),
  `Venue State` VARCHAR(200),
  `Venue Postal CD` VARCHAR(200),
  `Venue Address` VARCHAR(200),
  `Venue Name` VARCHAR(200),
  PRIMARY KEY (`Venue ID`)
);

CREATE TABLE game (
  `Game ID` INT,
  `Venue ID` INT,
  `Score` VARCHAR(200),
  `Game Date` DATETIME,
  `Season` VARCHAR(200),
  `Winning Team` VARCHAR(200),
  `Losing Team` VARCHAR(200),
  PRIMARY KEY (`Game ID`),
  FOREIGN KEY (`Venue ID`) REFERENCES venue (`Venue ID`)
);

CREATE TABLE `Regular Season Game` (
  `Game ID` INT,
  `Conference` VARCHAR(200),
  PRIMARY KEY (`Game ID`),
  FOREIGN KEY (`Game ID`) REFERENCES game (`Game ID`) ON DELETE CASCADE
);

CREATE TABLE `Tournament Game` (
  `Game ID` INT,
  `Round Of Bracket` VARCHAR(200),
  PRIMARY KEY (`Game ID`),
  FOREIGN KEY (`Game ID`) REFERENCES game (`Game ID`) ON DELETE CASCADE
);

CREATE TABLE `Game Highlights` (
  `Highlight ID` INT,
  `Game ID` INT,
  `Event Type` VARCHAR(200),
  `Event Desc` VARCHAR(200),
  `Highlight Timestamp` DATETIME,
  `X Coord` FLOAT, 
  `Y Coord` FLOAT,
  PRIMARY KEY (`Game ID`, `Highlight ID`),
  FOREIGN KEY (`Game ID`) REFERENCES game (`Game ID`) ON DELETE CASCADE
);

CREATE TABLE plays_in (
  `Game ID` INT,
  `Team ID` INT,
  PRIMARY KEY (`Game ID`, `Team ID`),
  FOREIGN KEY (`Game ID`) REFERENCES game (`Game ID`),
  FOREIGN KEY (`Team ID`) REFERENCES ncaateam (`Team ID`)
);

INSERT INTO headcoach 
  (`Coach ID`, `First Name`, `Last Name`)
VALUES 
  (1, 'Tom', 'Izzo'), 
  (2, 'Mike', 'Krzyzewski'),
  (3, 'Will', 'Wade'),
  (4, 'Richard', 'Pitino'),
  (5, 'Ritchie', 'McKay');
  
INSERT INTO ncaateam 
  (`Team ID`, `Team Name`, `University`, `Season Record`)
VALUES 
  (1, 'Spartans', 'Michigan State University', '28-6'),
  (2, 'Blue Devils', 'Duke University', '29-5'),
  (3, 'Tigers', 'Louisiana State University', '26-6'),
  (4, 'Golden Gophers', 'Minnesota State University', '21-13'),
  (5, 'Flames', 'Liberty University', '28-6');

INSERT INTO player 
  (`Player ID`, `Coach ID`, `Team ID`, `Player Name`, `Height`, `Jersey Num`)
VALUES 
  (1, 1, 1, 'Cassius Winston', '6-1', 5),
  (2, 1, 1, 'Nick Ward', '6-9', 44),
  (3, 2, 2, 'R.J. Barrett', '6-7', 5),
  (4, 2, 2, 'Cam Reddish', '6-8', 2),
  (5, 3, 3, 'Tremont Waters', '5-11', 3),
  (6, 3, 3, 'Joseph Barnes', '6-0', 16),
  (7, 4, 4, 'John Paige', '5-10', 7),
  (8, 5, 5, 'Randall Smith', '6-11', 41),
  (9, 5, 5, 'Jonas King', '6-6', 20),
  (10, 5, 5, 'Robert Lorenzo', '5-10', 18),
  (11, 5, 5, 'Sandy Crossfield', '6-3', 22),
  (12, 5, 5, 'Jeremiah Watts', '6-1', 29);

INSERT INTO transactions 
  (`Transaction ID`, `Team ID`, `Transaction Type`, `Amount`, `Transaction Desc`, `Transaction Timestamp`)
VALUES 
  (1, 5, 'Revenue', 500000.00, 'Merchandise sales for Mar 2018', '2018-04-01 02:14:00'),
  (2, 3, 'Expense', -65000.00, 'Penalty for failing to adhere to safety protocols', '2018-04-03 12:33:14'),
  (3, 1, 'Revenue', 100000.00, 'Ad sponsorship from athletics gear brand', '2018-04-15 21:03:02'),
  (4, 1, 'Revenue', 22816.35, 'Brand endorsement income for Apr 2018', '2018-04-22 10:49:00'),
  (5, 2, 'Expense', -38000.01, 'Celebration party expense', '2018-05-09 11:52:44'),
  (6, 2, 'Revenue', 12677.33, 'NBA 2018 - Video Game Promotion', '2018-05-11 16:43:19');

INSERT INTO mascot 
  (`Mascot ID`, `Team ID`, `Mascot Name`, `Mascot Type`)
VALUES 
  (1, 3, 'Live Tiger', 'Tigiris'),
  (2, 2, 'Devil', NULL),
  (3, 4, 'Goldy', NULL),
  (4, 5, 'Sparky', 'Eagle'),
  (5, 1, 'Sparty', 'Sapiens');

INSERT INTO venue 
  (`Venue ID`, `Venue City`, `Venue Postal CD`, `Venue State`, `Venue Address`, `Venue Name`)
VALUES 
  (1, 'East Lansing', '48824', 'MI', 'One Birch Road', 'Jack Breslin Students Events Center'),
  (2, 'Durham', '27706', 'NC', '301 Whitford Drive', 'Cameron Indoor Stadium'),
  (3, 'Baton Rouge', '70803', 'LA', 'North Stadium Road', 'Pete Maravich Assembly Center'),
  (4, 'Minneapolis', '55455', 'MN', '1925 SE University Avenue', 'Williams Arena'),
  (5, 'Lynchburg', '24502', 'VA', '1971 University Blvd', 'Vines Center');

INSERT INTO game 
  (`Game ID`, `Venue ID`, `Score`, `Game Date`, `Season`, `Winning Team`, `Losing Team`)
VALUES 
  (1, 1, '83-78', '2018-01-09 12:00:00', '2018', 'Spartans', 'Flames'),
  (2, 3, '103-102', '2018-01-20 15:00:00', '2018', 'Spartans','Tigers'),
  (3, 5, '111-107', '2018-01-24 17:30:00', '2018', 'Flames', 'Golden Gophers'),
  (4, 2, '99-87', '2018-02-03 18:45:00', '2018', 'Blue Devils', 'Spartans'),
  (5, 4, '82-80', '2018-02-21 20:00:00', '2018', 'Golden Gophers', 'Tigers'),
  (6, 4, '83-78', '2018-02-22 12:00:00', '2018', 'Spartans', 'Flames'),
  (7, 5, '103-102', '2018-02-25 15:00:00', '2018', 'Spartans','Tigers'),
  (8, 5, '111-107', '2018-03-01 17:30:00', '2018', 'Flames', 'Golden Gophers'),
  (9, 1, '99-87', '2018-03-03 18:45:00', '2018', 'Blue Devils', 'Spartans'),
  (10, 4, '82-80', '2018-03-04 20:00:00', '2018', 'Golden Gophers', 'Tigers'),
  (11, 2, '82-69', '2018-02-26 11:30:00', '2018', 'Blue Devils', 'Golden Gophers'),
  (12, 5, '108-103', '2018-02-28 13:15:00', '2018', 'Tigers', 'Flames'),
  (13, 3, '76-70', '2018-03-03 14:45:00', '2018', 'Spartans', 'Tigers'),
  (14, 2, '92-81', '2018-03-08 18:10:00', '2018', 'Blue Devils', 'Tigers'),
  (15, 1, '100-97', '2018-03-15 19:45:00', '2018', 'Spartans', 'Blue Devils'),
  (16, 1, '89-83', '2018-03-19 18:30:00', '2018', 'Tigers', 'Golden Gophers');

INSERT INTO `Regular Season Game`
  (`Game ID`, `Conference`)
VALUES 
  (1, 'Southeastern'),
  (2, 'Big Ten'),
  (3, 'Atlantic Coast'),
  (4, 'Patriot Leauge'),
  (5, 'Mideastern'),
  (6, 'Southeastern'),
  (7, 'Big Ten'),
  (8, 'Atlantic Coast'),
  (9, 'Patriot Leauge'),
  (10, 'Mideastern');

INSERT INTO `Tournament Game`
  (`Game ID`, `Round Of Bracket`)
VALUES 
  (11, 'First Round'),
  (12, 'Second Round'),
  (13, 'Quarterfinal 4'),
  (14, 'Semifinal 1'), 
  (15, 'Semifinal 2'),
  (16, 'Finals');

INSERT INTO `Game Highlights` 
  (`Highlight ID`, `Game ID`, `Event Type`, `Event Desc`, `Highlight Timestamp`, `X Coord`, `Y Coord`)
VALUES 
  (1, 1, 'twopointmade', 'Nick Ward makes two point shot', '2018-01-09 22:52:46', 89.0, 297.0),
  (2, 1, 'rebound', 'Scottie James offensive rebound', '2018-01-09 22:55:48', 364.0, 291.0),
  (3, 2, 'shootingfoul', 'Jim Walter shooting foul (Taurean Prince draws the foul)', '2018-01-09 22:58:17', 1048.0, 324.0),
  (4, 2, 'turnover', 'Justin Jones turnover (bad pass) (Brady Heslip steals)', '2018-01-09 23:20:20', 370.0, 202.0),
  (5, 2, 'end_period', 'End of 2nd half', '2018-01-09 23:23:05', NULL, NULL),
  (6, 2, 'opentip', 'Riley Grabau vs. Larry Nance Jr. (Charles Hankerson Jr. gains possession)', '2018-01-20 00:02:39', 574.0, 290.0),
  (7, 3, 'twopointmiss', 'Nic Moore misses two point jump shot', '2018-01-20 00:03:37', 870.0, 246.0),
  (8, 4, 'turnover', 'Ben Moore turnover (bad pass) (Josh Adams steals)', '2018-01-20 00:04:55', 911.0, 591.0),
  (9, 4, 'assist', 'Ryan Manuel makes two point layup (Ben Moore assists)', '2018-01-20 00:06:43', 1028.0, 277.0),
  (10, 4, 'officialtimeout', 'Official timeout', '2018-01-20 03:57:00', NULL, NULL);

INSERT INTO plays_in 
  (`Game ID`, `Team ID`)
VALUES 
  (1, 1),
  (1, 5),
  (2, 1),
  (2, 3),
  (3, 5),
  (3, 4),
  (4, 2),
  (4, 1),
  (5, 4),
  (5, 3),
  (6, 1),
  (6, 5),
  (7, 1),
  (7, 3),
  (8, 5),
  (8, 4),
  (9, 2),
  (9, 1),
  (10, 4),
  (10, 3),
  (11, 2),
  (11, 4),
  (12, 3),
  (12, 5),
  (13, 1),
  (13, 3),
  (14, 2),
  (14, 3),
  (15, 1),
  (15, 2),
  (16, 3),
  (16, 4);
