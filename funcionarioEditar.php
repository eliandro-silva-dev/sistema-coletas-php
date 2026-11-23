<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_tipo");
      ?>

   <b><font color="#0000FF">Tela de Edição de Funcionarios</font></b>
      </br> </br>

    <form action="funcionarioUpdate.php" method="post">

     <input type=hidden name=tabela value="funcionario">

     <b> Código:</b> <input type="text" name="input_codigo" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> Tipo:</b> <select name="input_tipo" id="input_tipo" required>
    <option value="motoboy" <?php if ($get3 == "motoboy") echo "selected"; ?>>Motoboy</option>
    <option value="carro" <?php if ($get3 == "carro") echo "selected"; ?>>Motorista (Carro)</option>
    <option value="office" <?php if ($get3 == "office") echo "selected"; ?>>Office Boy</option>
</select>
    
        
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
