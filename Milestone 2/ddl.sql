DROP DATABASE IF EXISTS ncaabaseketball;
CREATE DATABASE ncaabasketball;
SHOW CREATE DATABASE ncaabasketball;
USE ncaabasketball;

DROP TABLE IF EXISTS player;
DROP TABLE IF EXISTS headcoach;
DROP TABLE IF EXISTS ncaateam;
DROP TABLE IF EXISTS transactions;
DROP TABLE IF EXISTS mascot;
DROP TABLE IF EXISTS game;
DROP TABLE IF EXISTS reg_season_game;
DROP TABLE IF EXISTS tournament_game;
DROP TABLE IF EXISTS game_highlights;
DROP TABLE IF EXISTS venue;
DROP TABLE IF EXISTS plays_in; --many to many relationship between games and teams

CREATE TABLE player (
  player_id INT,
  coach_id INT,
  team_id INT,
  player_name VARCHAR(200),
  height VARCHAR(200),
  jersey_no INT,
  PRIMARY KEY (player_id),  
  FOREIGN KEY (coach_id) REFERENCES headcoach (coach_id),
  FOREIGN KEY (team_id) REFERENCES ncaateam (team_id)
);

CREATE TABLE headcoach (
  coach_id INT,
  first_name VARCHAR(200),
  last_name VARCHAR(200),
  PRIMARY KEY (coach_id)
);

CREATE TABLE ncaateam (
  team_id INT,
  team_name VARCHAR(200),
  university VARCHAR(200),
  season_record VARCHAR(200),
  PRIMARY KEY (team_id)
);

CREATE TABLE transactions (
  transaction_id INT,
  team_id INT,
  transaction_type VARCHAR(200),
  amount FLOAT,
  transaction_desc VARCHAR(200),
  transaction_timestamp DATETIME,
  PRIMARY KEY (transaction_id),
  FOREIGN KEY (team_id) REFERENCES ncaateam (team_id)
);

CREATE TABLE mascot (
  mascot_id INT,
  team_id INT,
  mascot_name VARCHAR(200),
  mascot_type VARCHAR(200),
  PRIMARY KEY (mascot_id),
  FOREIGN KEY (team_id) REFERENCES ncaateam (team_id) ON DELETE CASCADE
);

CREATE TABLE game (
  game_id INT,
  venue_id INT,
  score VARCHAR(200),
  game_date DATETIME,
  season VARCHAR(200),
  winning_team VARCHAR(200),
  losing_team VARCHAR(200),
  PRIMARY KEY (game_id),
  FOREIGN KEY (venue_id) REFERENCES venue (venue_id)
);

CREATE TABLE reg_season_game (
  game_id INT,
  conference VARCHAR(200),
  PRIMARY KEY (game_id),
  FOREIGN KEY (game_id) REFERENCES game (game_id) ON DELETE CASCADE
);

CREATE TABLE tournament_game (
  game_id INT,
  round_of_bracket VARCHAR(200),
  PRIMARY KEY (game_id),
  FOREIGN KEY (game_id) REFERENCES game (game_id) ON DELETE CASCADE
);

CREATE TABLE game_highlights (
  highlight_id INT,
  game_id INT,
  event_type VARCHAR(200),
  event_desc VARCHAR(200),
  highlight_timestamp DATETIME,
  x_coord FLOAT, --The location of the play in number of inches from the "left" baseline, max 1128
  y_coord FLOAT, --The location of the play in inches from the "top" sideline, max 600
  PRIMARY KEY (game_id, highlight_id),
  FOREIGN KEY (game_id) REFERENCES game (game_id) ON DELETE CASCADE
);

CREATE TABLE venue (
  venue_id INT,
  venue_city VARCHAR(200),
  venue_state VARCHAR(200),
  venue_postal_cd VARCHAR(200),
  venue_address VARCHAR(200),
  venue_name VARCHAR(200),
  PRIMARY KEY (venue_id)
);

-- many to many relationship
CREATE TABLE plays_in (
  game_id INT,
  team_id INT,
  PRIMARY KEY (game_id, team_id),
  FOREIGN KEY (game_id) REFERENCES game (game_id),
  FOREIGN KEY (team_id) REFERENCES team (game_id)
);