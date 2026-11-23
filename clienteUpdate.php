<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao = conectaBD();

    $var_codigo   = $_POST["input_codigo"];
    $var_nome     = $_POST["input_nome"];
    $var_endereco = $_POST["input_endereco"];
    $var_telefone = $_POST["input_telefone"];

    $SQL = "UPDATE cliente
               SET    nome     = '$var_nome',
                      endereco = '$var_endereco',
                      telefone = '$var_telefone'
               WHERE  codigo = {$var_codigo};";

    mysqli_query($conexao, $SQL) or die(mysqli_error());

    echo "Alteração realizada com Sucesso!";

    // encerrar conexão
    mysqli_close($conexao);
?>