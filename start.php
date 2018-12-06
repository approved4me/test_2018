<!DOCTYPE html>
<?php
require_once("inc/config.inc.php");
?>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>

	<?php
	 $sql ="DROP DATABASE IF EXISTS test3u;
	 		CREATE DATABASE IF NOT EXISTS test3u CHARACTER SET utf8  COLLATE utf8_unicode_ci;
			USE test3u;
			CREATE TABLE IF NOT EXISTS `user` (
			`id` int(5) unsigned NOT NULL AUTO_INCREMENT,
			`firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
			`surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
			`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
			`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
			`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			`updated_at` timestamp NULL DEFAULT NULL,
			`passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
			`passwortcode_time` timestamp NULL DEFAULT NULL,
			PRIMARY KEY (`id`), UNIQUE (`email`)
			)ENGINE=InnoDB DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci;" ;
     $dbh->exec($sql);
	?>
</body>
</html>
