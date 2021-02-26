<?php
require_once 'config.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  ('Connect to '.$dbname.' success');
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}