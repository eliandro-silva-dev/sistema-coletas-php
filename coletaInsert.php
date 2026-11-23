<?php
    include_once("_conexao.php");
    $conexao = conectaBD();

    $codigo             = $_POST["codigo"];
    $status             = $_POST["status"];
    $data_solicitacao   = $_POST["data_solicitacao"];
    $codigo_cliente     = $_POST["codigo_cliente"];
    $codigo_funcionario = $_POST["codigo_funcionario"];

    $sql = "INSERT INTO coleta(codigo, status, data_solicitacao, codigo_cliente, codigo_funcionario)
            VALUES ({$codigo}, '{$status}', '{$data_solicitacao}', {$codigo_cliente}, {$codigo_funcionario})";

    mysqli_query($conexao, $sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);
?>