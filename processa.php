<?php

//pegar tudo o que está digitado em conexao.php e colar aqui
include_once("conexao.php");

//$nome recebe o que o usuário digitar no campo de "nome" e "email".
$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

//Variável $sql que vai armazenar comandos sql
//insert into, insere dados em uma tabela que vai ser usuarios, os campos das tabelas vão ser
//nome, email, profissao e valores, são os valores recebidos pelo usuário.
$sql = "insert into usuarios (nome, email, profissao) values ('$nome','$email','$profissao')";

//contém comandos que vão registrar, gravar esses registros no banco de dados.
$salvar = mysqli_query($conexao, $sql);

//fecha a conexao
mysqli_close($conexao);


?>