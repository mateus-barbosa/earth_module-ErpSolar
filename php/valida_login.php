<?php
include_once './connect_db.php';
$bd_connection = connection();

$user = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * from usuarios WHERE ds_usuario_email = '$user' && senha_usuario = '$pass'";
$result = $bd_connection->query($sql);

if ($result->num_rows <= 0) {
  echo "<script> alert('Senha Incorreta') </script>";
  header('Location: ../index.php');
}
while ($row = $result->fetch_assoc()) {
}