<?php
	//DADOS DO SERVIDOR
	$host = "localhost";
	$login = "root";
	$senha = "";
	$banco = "tcc.teste";

	//CONEXÃO COM OS DADOS
	$conecta = mysqli_connect($host, $login, $senha, $banco) or die(mysqli_error());

     return $conecta;

	//VERIFICAÇÃO DE DADOS
	if(!$conecta){
		echo "Erro ao conectar ao banco de dados.";
	}
?>