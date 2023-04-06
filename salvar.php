<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$arquivo = fopen("cliente.csv", "a");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $telefone . ",");
fwrite($arquivo, $email . "\n");

fclose($arquivo);

header("location:index.php?mensagem=salvo");
?>