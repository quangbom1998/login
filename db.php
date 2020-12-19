<?php
/* Database connection settings */
$host = 'php-database-1.cdkwq7ui4rqa.us-east-2.rds.amazonaws.com';
$user = 'admin';
$pass = 'superman123';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
