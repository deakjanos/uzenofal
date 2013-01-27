CREATE TABLE `fal` (
  `id` int(11) NOT NULL auto_increment,
  `message` text collate latin2_hungarian_ci NOT NULL,
  `author` varchar(80) collate latin2_hungarian_ci NOT NULL default '',
  `email` varchar(50) collate latin2_hungarian_ci NOT NULL default '',
  `date` varchar(50) collate latin2_hungarian_ci NOT NULL default '',
  `ip` varchar(20) collate latin2_hungarian_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci AUTO_INCREMENT=28 ;

INSERT INTO `fal` VALUES (1, 'Gratulálunk', 'deakjanos.github.com', 'nincs', '09:15 PM 31st May', '127.0.0.1');

