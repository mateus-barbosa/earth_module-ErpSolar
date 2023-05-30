<?php
include_once "./connect_db.php";
$bd_connection = connection();

$nome = $_POST['name'];
$email = $_POST['email'];
$dt_nascimento = $_POST['data_nasc'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuarios`(`nm_usuario`, `ds_usuario_email`, `dt_nascimento_usuario`, `senha_usuario`) 
                    VALUES ('$nome','$email', '$dt_nascimento', '$senha')";

if (mysqli_query($bd_connection, $sql)) {
  echo "Cadastrado com sucesso!";
  header('Location: ../cadastro-tela.php');
} else {
  echo "Não deu";
}
?>