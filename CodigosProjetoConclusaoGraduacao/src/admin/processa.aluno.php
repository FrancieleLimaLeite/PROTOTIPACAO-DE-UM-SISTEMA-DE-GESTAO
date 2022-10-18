
<?php
session_start();

include_once("conexao.php");

$datainscr = $_POST['aData'];
$respinscr= $_POST['aResp'];
$nome= $_POST['aNome'];
$nasc = $_POST['aNasc'];
$end= $_POST['aRua'];
$bairro= $_POST['aBairro'];
$cep = $_POST['aCep'];
$rg= $_POST['aRg'];
$tel= $_POST['aTel'];
$grau= $_POST['aGrau'];
$escola= $_POST['aStud'];
$mae= $_POST['aMae'];
$pai= $_POST['aPai'];
$ofi = $_POST['aOficina'];
$periodo= $_POST['aTurno'];
$ponto= $_POST['aPonto'];
$obs = $_POST['aObs'];

$sql = " insert into aluno(data_inscricao, resp_inscricao, nome, nasc, endereco, bairro, cep, rg, telefone, grau_esc, escola, mae, pai, ofic_est, turno, ponto_onibus, obs) values ('$datainscr', '$respinscr', '$nome', '$nasc', '$end', '$bairro', '$cep', '$rg', '$tel', '$grau', '$escola', '$mae', '$pai', '$ofi', '$periodo', '$ponto', '$obs') ";
$salvar = mysqli_query($conecta,$sql);

if ($salvar) {
			echo "<script>
                          alert('Atendido cadastrado com sucesso!');
                          location.href='cadstro.aluno.php';
	              </script>";
}else{
			echo "<script>
                          alert('Já existe um(a) atendido(a) cadastrado com esses dados, por favor verifique a lista de atendidos.');
                          location.href='cadstro.aluno.php';
	              </script>";
}

?>

