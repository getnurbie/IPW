create database sportin5_tpsib17-p4;

create table completesentence(
	completeSentenceID int(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	completeSenteceName varchar(255) NOT NULL,
	completeSenteceAnswer varchar(255) NOT NULL,
	completeSentencePath varchar(255) NOT NULL
);

create table guesswho(
	guessWhoID int(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	guessWhoName varchar(255) NOT NULL,
	guessWhoAnswer varchar(255) NOT NULL,
	guessWhoPath varchar(255) NOT NULL
);

create table utilizadores(
	id int(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(25) NOT NULL,
	password varchar(50) NOT NULL, 
	email varchar(40) NOT NULL
);

insert into guesswho (guessWhoID, guessWhoName, guessWhoAnswer, guessWhoPath) values (1, 'Andy', 'Andy', '/WhoVoice/Episodio1/Andy.mp3');