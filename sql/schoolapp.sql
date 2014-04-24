DROP DATABASE IF EXISTS schoolapp;
CREATE DATABASE schoolapp;

CREATE TABLE IF NOT EXISTS schoolapp.answers (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `answer` text NOT NULL,
  `kind` tinyint(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO schoolapp.answers (id, user_id, question_id, answer, kind, date_created) VALUES
(1,1,1,'huh!', 1, UNIX_TIMESTAMP());

CREATE TABLE IF NOT EXISTS schoolapp.modules (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `user_id` int(255) NOT NULL,
  `description` text NOT NuLL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO schoolapp.modules (`id`, `name`, `description`, `date_created`) VALUES
(1, 'test1', 'eine Beschreibung', UNIX_TIMESTAMP()),
(2, 'test2', 'noch eine Beschreibung', UNIX_TIMESTAMP());

CREATE TABLE IF NOT EXISTS schoolapp.questions (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `module_id` int(255) NOT NULL,
  `question` text NOT NULL,
  `hint` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO schoolapp.questions (id, user_id, module_id, question, hint, date_created) VALUES
(1,1,1,'huh?', 'ugfu', UNIX_TIMESTAMP());

CREATE TABLE IF NOT EXISTS schoolapp.users (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `password` varchar(17) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO schoolapp.users (`id`, `name`, `password`, `role`) VALUES
(1, 'admin', 'pw', 'admin');


