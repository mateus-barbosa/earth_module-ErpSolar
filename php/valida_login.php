<?php
include "connect_db.php";

$user = $_POST['user'];
$pass = $_POST['password'];

// Validação simples de dados, sem levar em consideração senha por enquanto
$sql = "SELECT nm_funcionario from funcionarios WHERE nm_funcionario = '$user'";
// Erro! Motivo: Banco sem tabelas

if (mysqli_query($conn, $sql)) {
  echo "Usuário encontrado";
} else {
  echo "Não encontrado";
}