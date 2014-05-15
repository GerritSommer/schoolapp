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

INSERT INTO schoolapp.answers (`id`, `question_id`, `answer`, `kind`, `date_created`) VALUES
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
(27, 7, 'Quell-IP und ausgehender Port', 0, 1400186733),
(28, 8, 'Ein PC ist mit einem falschen Kabel angeschlossen', 0, 1400187527),
(29, 8, 'Der Port hat eine aktive Verbindung und normalen Traffic', 0, 1400187572),
(30, 8, 'Der Port ist durch einen Administrator deaktiviert', 0, 1400187585),
(31, 8, 'Der Port wird nicht verwendet', 0, 1400187595),
(32, 8, 'Der Port funktioniert nicht einwandfrei', 1, 1400187611),
(33, 9, 'Die Leistung ist verbessert durch beidseitigen Datenverkehr (bidirectional data flow)', 1, 1400188114),
(34, 9, 'Die Leistung ist verbessert da die NIC Kollisionen verhindert', 0, 1400188124),
(35, 9, 'VerzÃ¶gerungen verringern sich, da die NIC Frames schneller verarbeitet', 0, 1400188133),
(36, 9, 'Full-duplex Fast Ethernet bieten 100 percent EffektivitÃ¤t in beide Richtungen', 1, 1400188143),
(37, 9, 'Die Leistung ist deutlich verringert', 0, 1400188154),
(38, 9, 'Die Leistung ist verbessert da Kollisionen nicht mehr auftreten kÃ¶nnen und die Funktion auf dem GerÃ¤t deaktiviert wird', 1, 1400188167),
(39, 10, 'Mittels ACLS den traffic filtern', 0, 1400188578),
(40, 10, 'Die Geschwindigkeit der Ports erhÃ¶hen', 0, 1400188587),
(41, 10, 'Die CAM Tabelle vergrÃ¶ÃŸern', 0, 1400188600),
(42, 10, 'Port Sicherheit configurieren', 1, 1400188610),
(43, 11, 'Automatische verschlÃ¼sselung', 0, 1400188820),
(44, 11, 'Die automatische standart â€œtrunkingâ€ Einstellung', 1, 1400188830),
(45, 11, 'Eine offene Telnetverbindung', 0, 1400188839),
(46, 11, 'Traffic forwarding', 0, 1400188847),
(47, 12, 'Die Netzwerklast steigt dramatisch durch die â€œtrunkingâ€ Informationen', 0, 1400189141),
(48, 12, 'Die GerÃ¤te in einem VLAN hÃ¶ren den Broadcast andere GerÃ¤te in einem anderen VLAN', 1, 1400189153),
(49, 12, 'Die GrÃ¶ÃŸe der Collision Domain ist gesunken', 0, 1400189162),
(50, 12, 'VLANs grupieren Hosts logisch, unabhÃ¤ngig von deren physikalischen Standort', 1, 1400189173),
(51, 12, 'Die Anzahl benÃ¶tigter Switche ist niedriger', 0, 1400189182),
(52, 13, 'Switch Port Sicherheit', 0, 1400189403),
(53, 13, 'PVLAN geschÃ¼tzter Port', 1, 1400189414),
(54, 13, 'ACL', 0, 1400189428),
(55, 13, 'VLAN', 0, 1400189433),
(56, 14, 'Der Port konfiguriert sich automatisch neu', 0, 1400189634),
(57, 14, 'Der port erstellt das VLAN neu', 0, 1400189644),
(58, 14, 'Der Port geht in die Standarteinstellung zurÃ¼ck', 0, 1400189655),
(59, 14, 'Der Port wird inaktiv', 1, 1400189666);

CREATE TABLE IF NOT EXISTS schoolapp.modules (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text NOT NuLL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO schoolapp.modules(`id`, `name`, `description`, `date_created`) VALUES
(3, 'Modul 1', '', 1400186316),
(4, 'Modul 2', '', 1400187483),
(5, 'Modul 3', '', 1400188627);


CREATE TABLE IF NOT EXISTS schoolapp.questions (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `module_id` int(255) NOT NULL,
  `question` text NOT NULL,
  `hint` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO schoolapp.questions (`id`,`module_id`, `question`, `hint`, `date_created`) VALUES
(1, 1, 'huh?', 'ugfu', 1398329598),
(2, 3, 'Welches ist eine Funktion eines Layer 2 switches?', 'keiner', 1400186373),
(3, 3, 'Was versteht man unter â€œcollapsed coreâ€ in einer Netzwerkinfrastruktur?', 'keine', 1400186458),
(4, 3, 'ABC, Inc. hat Ã¼ber 50 Hosts in einem LAN. Der Systemadministrator wÃ¼rde gerne die DatenÃ¼bertragungsrate des LANs verbessern. Welches GerÃ¤t wÃ¼rde die Anzahl der â€œcollision domainsâ€ erhÃ¶hen und nebenbei noch die DatenÃ¼bertragungsrate verbessern?', 'keine', 1400186523),
(5, 3, 'Was bedeutet der Begriff â€œport densityâ€ im Zusammenhang mit einem Ethernet switch?', 'keine', 1400186584),
(6, 3, 'Welcher Ãœbertragungstyp wird angewendet, wenn ein Switch die Ziel-Macadresse nicht bekannt ist?', 'keine', 1400186644),
(7, 3, 'Welche Informationen eines eingehenden Frames werden vom Switch gespeichert?', 'keine', 1400186691),
(8, 4, 'WÃ¤hrend der Diagnaso eines Netzwerkproblems bemerkt der Systemadministrator, das die Status-LED eines Switches zwischen grÃ¼n und gelb. Welche Bedeutung hat dies?', 'keine', 1400187500),
(9, 4, 'Welche drei Angaben bezÃ¼glich der Verwendung eines full-duplex Fast Ethernet Kabels stimmen? (WÃ¤hle drei.)', 'keine', 1400188100),
(10,4, 'Welche Methode kÃ¶nnte eine â€œMAC flodding attackâ€ lindern?', 'keine', 1400188557),
(11,5, 'WÃ¤hrend eines standart â€œVLAN hooping attackâ€ welche Eigenschaft macht sich der Angreifer zunutze?', 'keine', 1400188809),
(12,5, 'Welche beiden Aussagen Ã¼ber VLAN-Integrationen treffen zu? (WÃ¤hle zwei.)', 'keine', 1400189126),
(13,5, 'Welche Eigenschaft eines Switches stellt sicher, dass kein Unicast, Multicast oder Broadcast Traffic an die so konfigurierten Ports weitergeleitet wird?', 'keine', 1400189390),
(14,5, 'Was passiert mit einem VLAN 10 definierten Port, wenn der Systemadministrator das VLAN 10 lÃ¶scht?', 'keine', 1400189623);


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
