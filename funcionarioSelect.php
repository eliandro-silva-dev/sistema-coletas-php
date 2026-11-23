<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de Funcionario</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Tipo Funcionario</b></td>
       
        <td><b>Alterar</b></td>
        <td><b>Excluir</b></td>
     </tr>

       <?php
         include_once("_conexao.php");
         $conexao = conectaBD();

           $sql = "SELECT * FROM funcionario;";
           $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codigo'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['tipo'];?></td>
                

                <td><a href="<?php echo "funcionarioEditar.php?var_cod=". $i['codigo']."&var_nome=".$i['nome']."&var_tipo=".$i['tipo']?>">Alterar</a></td>
                <td><a href="<?php echo "funcionarioDelete.php?var_cod=". $i['codigo']?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>
     <h4><a href="funcionario.html">Cadastrar novo Funcionario</a></h4> <!-- COLOCAR O NOME DO ARQUIVO HTML -->

     <?php
      mysqli_close($conexao);
     ?>
</BODY>
</HTML>
