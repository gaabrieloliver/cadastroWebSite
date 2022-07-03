<?php

$hostName = "localhost";
$user = "root";
$password = "";
$dataBase = "cadastro";
$conexao = mysqli_connect($hostName, $user, $password, $dataBase);

//Verifica se a variável $conexao funcionou ou não, se não, exibe mensagem de erro(opcional)
if(!$conexao){
    echo "Falha na conexão com o Banco de Dados";
}

?>