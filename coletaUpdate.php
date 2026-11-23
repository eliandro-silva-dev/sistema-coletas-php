<?php
    include_once("_conexao.php");
    $conexao = conectaBD();

    $var_codigo      = $_POST["input_codigo"];
    $var_status      = $_POST["input_status"];
    $var_data        = $_POST["input_data"];
    $var_cliente     = $_POST["input_cliente"];
    $var_funcionario = $_POST["input_funcionario"];

    $SQL = "UPDATE coleta
               SET    status              = '$var_status',
                      data_solicitacao    = '$var_data',
                      codigo_cliente      = $var_cliente,
                      codigo_funcionario  = $var_funcionario
               WHERE  codigo = {$var_codigo};";

    mysqli_query($conexao, $SQL) or die(mysqli_error());

    echo "Alteração realizada com Sucesso!";

    mysqli_close($conexao);
?>