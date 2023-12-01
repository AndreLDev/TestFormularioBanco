<?php

$conexao = mysqli_connect('localhost:3306','root','') //porta, usuário, senha
or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

$select_db = mysqli_select_db($conexao, "projectformulario")

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$string_sql = "INSERT INTO users (email, senha, cep, estado, endereco, endereco2, cidade) VALUES ('$email','$password', '$cep', '$estado', '$address', '$address2', '$city')"; //String com consulta SQL da inserção

?>