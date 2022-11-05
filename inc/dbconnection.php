<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'employee_db';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connetion
if ($conn->connect_error) {
  die('Connection error: ' . $conn->connect_error);
}
