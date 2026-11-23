<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Cadastro de Coleta</font></b> </br> </br>

   <form action="coletaInsert.php" method="post">

     <b> Código da Coleta:</b> <input type="number" name="codigo" size="8" required>
       </br></br>

     <b> Status:</b> <input type="text" name="status" size="20" required>
       </br></br>

     <b> Data da Solicitação:</b> <input type="date" name="data_solicitacao" required>
       </br></br>

     <b> Cliente:</b>
     <select name="codigo_cliente" required>
        <option value="">--Escolha o cliente:--</option>
        <?php
           include_once("_conexao.php");
           $conexao = conectaBD();

           $sqlCliente = "SELECT * FROM cliente;";
           $resCliente = mysqli_query($conexao, $sqlCliente);
           while($c = mysqli_fetch_assoc($resCliente)){
              echo "<option value='".$c['codigo']."'>".$c['nome']."</option>";
           }
        ?>
     </select>
       </br></br>

     <b> Funcionário:</b>
     <select name="codigo_funcionario" required>
        <option value="">--Escolha o funcionário:--</option>
        <?php
           $sqlFunc = "SELECT * FROM funcionario;";
           $resFunc = mysqli_query($conexao, $sqlFunc);
           while($f = mysqli_fetch_assoc($resFunc)){
              echo "<option value='".$f['codigo']."'>".$f['nome']."</option>";
           }
           mysqli_close($conexao);
        ?>
     </select>
       </br></br>

     <input type="reset" value="Limpar"> <input type="submit" value="Cadastrar">
   </form>
</BODY>
</HTML>