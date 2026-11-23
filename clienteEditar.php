<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_endereco");
      $get4 = filter_input(INPUT_GET, "var_telefone");
   ?>

   <b><font color="#0000FF">Tela de Edição de Clientes</font></b>
      </br> </br>

    <form action="clienteUpdate.php" method="post">

     <input type=hidden name=tabela value="cliente">

     <b> Código:</b> <input type="text" name="input_codigo" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> Endereço:</b> <input type="text" name="input_endereco" size="15" value="<?php echo $get3?>">
       </br></br>
    
    
    <b> Telefone:</b> <input type="text" name="input_telefone" size="15" value="<?php echo $get4?>">
       </br></br>

    
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
