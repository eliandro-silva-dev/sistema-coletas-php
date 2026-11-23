<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de Coletas</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Status</b></td>
        <td><b>Data Solicitação</b></td>
        <td><b>Cliente</b></td>
        <td><b>Funcionário</b></td>
        <td><b>Alterar</b></td>
        <td><b>Excluir</b></td>
     </tr>

       <?php
         include_once("_conexao.php");
         $conexao = conectaBD();

         $sql = "SELECT coleta.codigo, status, data_solicitacao,
                        codigo_cliente, cliente.nome as nomecliente,
                        codigo_funcionario, funcionario.nome as nomefuncionario
                 FROM coleta
                 JOIN cliente     ON coleta.codigo_cliente     = cliente.codigo
                 JOIN funcionario ON coleta.codigo_funcionario = funcionario.codigo;";
         $resultado = mysqli_query($conexao, $sql);

         while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codigo'];?></td>
                <td><?php echo $i['status'];?></td>
                <td><?php echo $i['data_solicitacao'];?></td>
                <td><?php echo $i['nomecliente'];?></td>
                <td><?php echo $i['nomefuncionario'];?></td>
                <td><a href="<?php echo "coletaEditar.php?var_cod=".$i['codigo']."&var_status=".$i['status']."&var_data=".$i['data_solicitacao']."&var_cliente=".$i['codigo_cliente']."&var_funcionario=".$i['codigo_funcionario']?>">Alterar</a></td>
                <td><a href="<?php echo "coletaDelete.php?var_cod=". $i['codigo']?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>
     <h4><a href="coleta.php">Cadastrar nova Coleta</a></h4>

     <?php
      mysqli_close($conexao);
     ?>
</BODY>
</HTML>