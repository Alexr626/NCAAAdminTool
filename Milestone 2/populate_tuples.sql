--Player table
INSERT INTO player 
  (player_id, coach_id, team_id, player_name, height, jersey_no)
VALUES 
  (1, 1, 1, 'Cassius Winston', '6-1', 5), 
  (2, 1, 1, 'Nick Ward', '6-9', 44),
  (3, 2, 2, 'R.J. Barrett', '6-7', 5),
  (4, 2, 2, 'Cam Reddish', '6-8', 2), 
  (5, 3, 3, 'Tremont Waters', '5-11', 3); 

--Headcoach table
INSERT INTO headcoach 
  (coach_id, first_name, last_name)
VALUES 
  (1, 'Tom', 'Izzo'), 
  (2, 'Mike', 'Krzyzewski'),
  (3, 'Will', 'Wade'),
  (4, 'Richard', 'Pitino'),
  (5, 'Ritchie', 'McKay');

--Headcoach table
INSERT INTO ncaateam 
  (team_id, team_name, university, season_record)
VALUES 
  (1, 'Spartans', 'Michigan State University', '28-6'),
  (2, 'Blue Devils', 'Duke University', '29-5'),
  (3, 'Tigers', 'Louisiana State University', '26-6'),
  (4, 'Golden Gophers', 'Minnesota State University', '21-13'), 
  (5, 'Flames', 'Liberty University', '28-6');

--Transactions table
INSERT INTO transactions 
  (transaction_id, team_id, transaction_type, amount, transaction_desc, transaction_timestamp)
VALUES 
  (1, 5, 'Revenue', 500000.00, 'Merchandise sales for Mar 2018', '2018-04-01 02:14:00'),
  (2, 3, 'Expense', -65000.00, 'Penalty for failing to adhere to safety protocols', '2018-04-03 12:33:14'),
  (3, 1, 'Revenue', 100000.00, 'Ad sponsorship from athletics gear brand', '2018-04-15 21:03:02'),
  (4, 1, 'Revenue', 22816.35, 'Brand endorsement income for Apr 2018', '2018-04-22 10:49:00'), 
  (5, 2, 'Expense', -38000.01, 'Celebration party expense', '2018-05-09 11:52:44');

--Mascot table
INSERT INTO mascot 
  (mascot_id, team_id, mascot_name, mascot_species)
VALUES 
  (1, 3, 'Live Tiger', 'Tigiris'),
  (2, 2, 'Devil', NULL),
  (3, 4, 'Goldy', NULL),
  (4, 5, 'Sparky', 'Eagle'), 
  (5, 1, 'Sparty', 'Sapiens');

--Game table
INSERT INTO game 
  (game_id, venue_id, score, game_date, season, winning_team, losing_team)
VALUES 
  (1, 1, '83-78', '2018-01-09 12:00:00', '2018', 'Spartans', 'Flames'),
  (2, 3, '103-102', '2018-01-20 15:00:00', '2018', 'Spartans','Tigers'),
  (3, 5, '111-107', '2018-01-24 17:30:00', '2018', 'Flames', 'Golden Gophers'),
  (4, 1, '99-87', '2018-02-03 18:45:00', '2018', 'Blue Devils', 'Spartans'), 
  (5, 4, '82-80', '2018-02-21 20:00:00', '2018', 'Golden Gophers', 'Tigers'),
  (6, 2, '82-69', '2018-02-26 11:30:00', '2018', 'Blue Devils', 'Golden Gophers'),
  (7, 5, '108-103', '2018-02-28 13:15:00', '2018', 'Tigers', 'Flames'),
  (8, 3, '76-70', '2018-03-03 14:45:00', '2018', 'Spartans', 'Tigers'),
  (9, 2, '92-81', '2018-03-08 18:10:00', '2018', 'Blue Devils', 'Tigers'), 
  (10, 1, '100-97', '2018-03-15 19:45:00', '2018', 'Spartans', 'Blue Devils');

--Regular Season Game table
INSERT INTO reg_season_game 
  (game_id, conference)
VALUES 
  (1, 'Southeastern'),
  (2, 'Big Ten'),
  (3, 'Atlantic Coast'),
  (4, 'Patriot Leauge'), 
  (5, 'Mideastern');

--Tournament Game table
INSERT INTO tournament_game 
  (game_id, round_of_bracket)
VALUES 
  (6, 'First Round'),
  (7, 'Second Round'),
  (8, 'Quarterfinal 4'),
  (9, 'Semifinal 1'), 
  (10, 'Semifinal 2');

--Game Highlights table
INSERT INTO game_highlights 
  (highlight_id, game_id, event_type, event_desc, highlight_timestamp, x_coord, y_coord)
VALUES 
  (1, 1, 'twopointmade', 'Nick Ward makes two point shot', '2018-01-09 22:52:46', 89.0, 297.0),
  (2, 1, 'rebound', 'Scottie James offensive rebound', '2018-01-09 22:55:48', 364.0, 291.0),
  (3, 1, 'shootingfoul', 'Jim Walter shooting foul (Taurean Prince draws the foul)', '2018-01-09 22:58:17', 1048.0, 324.0), 
  (4, 1, 'turnover', 'Justin Jones turnover (bad pass) (Brady Heslip steals)', '2018-01-09 23:20:20', 370.0, 202.0),
  (5, 1, 'end_period', 'End of 2nd half', '2018-01-09 23:23:05', NULL, NULL),
  (6, 2, 'opentip', 'Riley Grabau vs. Larry Nance Jr. (Charles Hankerson Jr. gains possession)', '2018-01-20 00:02:39', 574.0, 290.0),
  (7, 2, 'twopointmiss', 'Nic Moore misses two point jump shot', '2018-01-20 00:03:37', 870.0, 246.0),
  (8, 2, 'turnover', 'Ben Moore turnover (bad pass) (Josh Adams steals)', '2018-01-20 00:04:55', 911.0, 591.0), 
  (9, 2, 'assist', 'Ryan Manuel makes two point layup (Ben Moore assists)', '2018-01-20 00:06:43', 1028.0, 277.0),
  (10, 2, 'officialtimeout', 'Official timeout', '2018-01-20 03:57:00', NULL, NULL);

--Venue table
INSERT INTO venue 
  (venue_id, venue_city, venue_postal_cd, venue_state, venue_address, venue_name)
VALUES 
  (1, 'East Lansing', '48824', 'MI', 'One Birch Road', 'Jack Breslin Students Events Center'),
  (2, 'Durham', '27706', 'NC', '301 Whitford Drive', 'Cameron Indoor Stadium'),
  (3, 'Baton Rouge', '70803', 'LA', 'North Stadium Road', 'Pete Maravich Assembly Center'),
  (4, 'Minneapolis', '55455', 'MN', '1925 SE University Avenue', 'Williams Arena'),
  (5, 'Lynchburg', '24502', 'VA', '1971 University Blvd', 'Vines Center');

--Plays-In table
INSERT INTO plays_in 
  (game_id, team_id)
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
  (5, 3);
