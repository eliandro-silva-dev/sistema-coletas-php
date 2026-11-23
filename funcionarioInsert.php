<?php       
include_once("_conexao.php");
$conexao = conectaBD();

//Precisa alterar os nomes confome consta no cliente.html
    $codigo    = $_POST["codigo"];
    $nome      = $_POST["nome"];
    $tipo  = $_POST["tipo"];
    
      
    $sql= "INSERT INTO funcionario(codigo, nome, tipo) # PRECISA SER IDENTICO AO HTML
           VALUES ({$codigo},'{$nome}', '{$tipo}')"; # TEXTO PRECISA COLOCAR '' ASPAS
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>