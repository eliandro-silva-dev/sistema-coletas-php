<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao = conectaBD();

    $var_codigo   = $_POST["input_codigo"];
    $var_nome     = $_POST["input_nome"];
    $var_tipo     = $_POST["input_tipo"];
   

    $SQL = "UPDATE funcionario
               SET    nome     = '$var_nome',
                      tipo     = '$var_tipo'
               WHERE  codigo = {$var_codigo};";

    mysqli_query($conexao, $SQL) or die(mysqli_error());

    echo "Alteração realizada com Sucesso!";

    // encerrar conexão
    mysqli_close($conexao);
?>