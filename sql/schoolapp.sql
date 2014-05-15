DROP DATABASE IF EXISTS schoolapp;
CREATE DATABASE schoolapp;

CREATE TABLE IF NOT EXISTS schoolapp.answers (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question_id` int(255) NOT NULL,
  `answer` text NOT NULL,
  `kind` tinyint(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO schoolapp.answers (`id`, `question_id`,`answer`, `kind`, `date_created`) VALUES
(1, 1, 'huh!', 1, 1398329598),
(2, 1, 'tester falscg', 0, 1398331476),
(3, 1, 'tetser richtig', 1, 1398331487),
(4, 2, 'Daten anhand logischer Adressierung weiterleiten', 0, 1400186399),
(5, 2, 'Den Port eines Hosts anhand der Ziel-MAC Adresse lernen', 0, 1400186413),
(6, 2, 'Dupliziert das elektische Siganal jedes Frames an jeden Port', 0, 1400186423),
(7, 2, 'Bestimmt anhand der Ziel-MAC Adresse welches â€œinterfaceâ€ zum Weiterleiten genutzt werden soll', 1, 1400186437),
(8, 3, 'Eine Kombination der Funktionen des access, distribution, und core Layers', 0, 1400186469),
(9, 3, 'Eine Kombination der Funktionen des access und core Layers', 0, 1400186478),
(10, 3, 'Eine Kombination der Funktionen des distribution und core Layers', 1, 1400186495),
(11, 3, 'Eine Kombination der Funktionen des access und distribution Layers', 0, 1400186507),
(12, 4, 'Host', 0, 1400186536),
(13, 4, 'Hub', 0, 1400186543),
(14, 4, 'NIC', 0, 1400186549),
(15, 4, 'Switch', 1, 1400186558),
(16, 5, 'Die Anzahl der an jeden Port angeschlossenen Hosts', 0, 1400186596),
(17, 5, 'Die Gescwindigkeit eines Ports', 0, 1400186606),
(18, 5, 'Der verfÃ¼gbare Speicherplatz eines Ports', 0, 1400186617),
(19, 5, 'Die Anzahl verfÃ¼gbarer Ports', 1, 1400186628),
(20, 6, 'Anycast', 0, 1400186654),
(21, 6, 'Unicast', 0, 1400186661),
(22, 6, 'Broadcast', 1, 1400186670),
(23, 6, 'Multicast', 0, 1400186677),
(24, 7, 'Quell-MAC adresse und der eingehende Port', 1, 1400186704),
(25, 7, 'Ziel-MAC adresse und der eingehende Port', 0, 1400186714),
(26, 7, 'Ziel-IP und der eingehende Port', 0, 1400186724),
(27, 7, 'Quell-IP und ausgehender Port', 0, 1400186733);

CREATE TABLE IF NOT EXISTS schoolapp.modules (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text NOT NuLL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO schoolapp.modules (`id`, `name`, `description`, `date_created`) VALUES
(1, 'Modul 1', 0, 1400186316),
(2, 'Modul 2', 0, 1400186316);


CREATE TABLE IF NOT EXISTS schoolapp.questions (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `module_id` int(255) NOT NULL,
  `question` text NOT NULL,
  `hint` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO schoolapp.questions (`id`, `module_id`, `question`, `hint`, `date_created`) VALUES
(1, 1, 'huh?', 'ugfu', 1398329598),
(2, 1, 'Welches ist eine Funktion eines Layer 2 switches?', 'keiner', 1400186373),
(3, 1, 'Was versteht man unter â€œcollapsed coreâ€ in einer Netzwerkinfrastruktur?', 'keine', 1400186458),
(4, 2, 'ABC, Inc. hat Ã¼ber 50 Hosts in einem LAN. Der Systemadministrator wÃ¼rde gerne die DatenÃ¼bertragungsrate des LANs verbessern. Welches GerÃ¤t wÃ¼rde die Anzahl der â€œcollision domainsâ€ erhÃ¶hen und nebenbei noch die DatenÃ¼bertragungsrate verbessern?', 'keine', 1400186523),
(5, 2, 'Was bedeutet der Begriff â€œport densityâ€ im Zusammenhang mit einem Ethernet switch?', 'keine', 1400186584),
(6, 2, 'Welcher Ãœbertragungstyp wird angewendet, wenn ein Switch die Ziel-Macadresse nicht bekannt ist?', 'keine', 1400186644),
(7, 2, 'Welche Informationen eines eingehenden Frames werden vom Switch gespeichert?', 'keine', 1400186691);

CREATE TABLE IF NOT EXISTS schoolapp.users (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `password` varchar(17) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO schoolapp.users (`id`, `name`, `password`, `role`) VALUES
(1, 'admin', 'pw', 'admin');

CREATE TABLE IF NOT EXISTS schoolapp.histories (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `answer_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO schoolapp.histories (`id`, `user_id`, `answer_id`) VALUES
(1, 1, 1);
