<?php
/* Database connection settings */
$host = 'localhost';
$user = 'Beeper';
$pass = 'abc123';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
