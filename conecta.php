<?php

$servername = 'localhost';
$username = 'tiago';
$password = '123';
$dbname = 'world_x';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}