
<?php
session_start();

include_once("conexao.php");

$nome= $_POST['nome'];
$nasc = $_POST['nasc'];
$end= $_POST['rua'];
$bairro= $_POST['bairro'];
$cep = $_POST['cep'];
$rg= $_POST['rg'];
$cpf= $_POST['cpf'];
$tel= $_POST['tel'];
$turno= $_POST['turno'];
$email= $_POST['email'];
$obs = $_POST['obs'];

$sql = " insert into professor(nome, nasc, endereco, bairro, cep, rg, cpf, telefone, turno, email, obs) values ('$nome', '$nasc', '$end', '$bairro', '$cep', '$rg', '$cpf', '$tel', '$turno', '$email', '$obs') ";
$salvar = mysqli_query($conecta,$sql);

if ($salvar) {
			echo "<script>
                          alert('Oficineiro cadastrado com sucesso!');
                          location.href='cad.prof.php';
	              </script>";
}else{
			echo "<script>
                          alert('Já existe um(a) oficineiro(a) cadastrado com esses dados, por favor verifique a lista de oficineiros.');
                          location.href='cad.prof.php';
	              </script>";
}
?>

