<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn) {
    die("Conexão deu erro " . mysqli_connect_error());
  }
  //echo "Conexão deu certo";
?>