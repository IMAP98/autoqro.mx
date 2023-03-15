<?php

function connect()
{
  try {

    $servername = "";
    $username = "";
    $password = '';
    $bd = "";

    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

  }

  return $conn;

}

?>
