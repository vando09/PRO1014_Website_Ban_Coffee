<?php
class Database
{
  public function getDatabase()
  {
    $servername = "localhost";
    $database = "du_an_1";
    $username = "root";
    $password = "mysql";
    try {
      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
      return $conn;
    } catch (Exception $e) {
      die("Connection failed: " . $e->getMessage());
    }
  }
}

