<?php
session_start();
require_once("conexao.php");

if (isset($_GET['enviar'])) {
	if (!empty($_GET['id_vol'])) {
		$id=$_GET['id_vol'];
		$comando="DELETE FROM voluntario WHERE id_vol ='$id'";
		$enviar=mysqli_query($conecta, $comando);
		if ($enviar) {
			header("location:buscavol.php");
			exit;
		}else{
			$_SESSION['mensagem']="Erro ao excluir produto";
			header("location:buscavol.php");
			exit;
		}
	}
}else{
	header("location:../");
			exit;
}