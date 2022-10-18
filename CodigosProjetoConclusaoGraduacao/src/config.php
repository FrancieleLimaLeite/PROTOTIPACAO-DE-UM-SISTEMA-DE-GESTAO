<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>


<? if(@$_GET['pg'] == 'sair'){
	
session_destroy();
$_SESSION['usuario'];
$_SESSION['senha'];
$_SESSION['nome'];
$_SESSION['painel'];



echo "<script language='javascript'>window.location='index.php';</script>";



}?>



<?php

require "conexao.php";

@session_start();
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];
$painel = $_SESSION['painel'];

if($usuario == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
}else if($senha == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
}else if($nome == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
}else{

$sql_1 = mysql_query("SELECT * FROM acesso_ao_sistema WHERE usuario = '$usuario' AND senha = '$senha'") or die(mysql_error());
$conta_sql_1 = mysql_num_rows($sql_1);

if($conta_sql_1 == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
}else{

 }
}
?>




<? if(@$_GET['acao'] == 'quebra'){
	
session_destroy();
$_SESSION['usuario'];
$_SESSION['senha'];
$_SESSION['nome'];
$_SESSION['painel'];



echo "<script language='javascript'>window.location='index.php';</script>";



}?>
</body>
</html>