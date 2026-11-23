<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod");
      $get2 = filter_input(INPUT_GET, "var_status");
      $get3 = filter_input(INPUT_GET, "var_data");
      $get4 = filter_input(INPUT_GET, "var_cliente");
      $get5 = filter_input(INPUT_GET, "var_funcionario");
   ?>

   <b><font color="#0000FF">Tela de Edição de Coletas</font></b> </br> </br>

    <form action="coletaUpdate.php" method="post">

     <b> Código:</b> <input type="text" name="input_codigo" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

     <b> Status:</b> <input type="text" name="input_status" size="20" value="<?php echo $get2?>">
       </br></br>

     <b> Data da Solicitação:</b> <input type="date" name="input_data" value="<?php echo $get3?>">
       </br></br>

     <b> Cliente:</b>
     <select name="input_cliente" required>
        <?php
           include_once("_conexao.php");
           $conexao = conectaBD();

           $sqlCliente = "SELECT * FROM cliente;";
           $resCliente = mysqli_query($conexao, $sqlCliente);
           while($c = mysqli_fetch_assoc($resCliente)){
              $sel = ($c['codigo'] == $get4) ? "selected" : "";
              echo "<option value='".$c['codigo']."' {$sel}>".$c['nome']."</option>";
           }
        ?>
     </select>
       </br></br>

     <b> Funcionário:</b>
     <select name="input_funcionario" required>
        <?php
           $sqlFunc = "SELECT * FROM funcionario;";
           $resFunc = mysqli_query($conexao, $sqlFunc);
           while($f = mysqli_fetch_assoc($resFunc)){
              $sel = ($f['codigo'] == $get5) ? "selected" : "";
              echo "<option value='".$f['codigo']."' {$sel}>".$f['nome']."</option>";
           }
           mysqli_close($conexao);
        ?>
     </select>
       </br></br>

    <input type="submit" value="Salvar">
   </form>
</BODY>
</HTML>