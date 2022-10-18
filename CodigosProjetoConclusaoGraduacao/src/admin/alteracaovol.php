<?php 

include_once("conexao.php"); 

  $id = filter_input(INPUT_GET, "id_vol");
  $nome = filter_input(INPUT_GET, "nome");
  $email = filter_input(INPUT_GET, "email");
  $tel = filter_input(INPUT_GET, "telefone");
  $benf = filter_input(INPUT_GET, "benfeitoria");
  $obs = filter_input(INPUT_GET, "obs");

  $sql = mysqli_query($conecta, "update voluntario set id_vol='$id', nome='$nome', email='$email', telefone='$tel', benfeitoria='$benf', obs='$obs' ");
?>