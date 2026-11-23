<?php       
include_once("_conexao.php");
$conexao = conectaBD();

//Precisa alterar os nomes confome consta no cliente.html
    $codigo    = $_POST["cod"];
    $nome      = $_POST["nome"];
    $endereco  = $_POST["endereco"];
    $telefone  = $_POST["telefone"];
      
    $sql= "INSERT INTO cliente(codigo, nome, endereco, telefone) # PRECISA SE IDENTICO AO HTML
           VALUES ({$codigo},'{$nome}', '{$endereco}','{$telefone}')"; # TEXTO PRECISA COLOCAR '' ASPAS
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

   mysqli_close($conexao);
?>