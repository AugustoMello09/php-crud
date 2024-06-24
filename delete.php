<?php 
include "db_conexao.php";
$id = $_GET['id'];
$sql = "DELETE FROM `php` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result) {
  header("Location: index.php?msg=Usuário deletado com sucesso! ");
}
else {
  echo "Faild: " . mysqli_error($conn);
}
?>