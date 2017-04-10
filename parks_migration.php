<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks');

require 'db_connect.php';

$query = 'DROP TABLE IF EXISTS national_parks;';
$connection->exec($query);

$createParksTable = 'CREATE TABLE national_parks (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(100),
  location varchar(100),
  date_established DATE,
  area_in_acres DOUBLE UNSIGNED,
  PRIMARY KEY (id)
)';
$connection->exec($createParksTable);
 ?>
