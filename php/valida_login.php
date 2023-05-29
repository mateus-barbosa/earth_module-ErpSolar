<?php
include_once './connect_db.php';
$bd_connection = connection();

$user = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * from usuarios WHERE ds_usuario_email = '$user' && senha_usuario = '$pass'";

if ($sql != null) {
  echo "Conexão realizada com sucesso";
}