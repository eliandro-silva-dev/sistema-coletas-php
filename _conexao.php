<?php
function conectaBD(){
    $servername = "localhost";
    $database = "coletas"; # Colocar o mesmo nome criado no phpmyadmin
    $username = "root";
    $password = "";

    $conexao = mysqli_connect($servername, $username, $password, $database);

    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    return $conexao;
}

function desconectaBD($conexao){
    mysqli_close($conexao);
}
?>