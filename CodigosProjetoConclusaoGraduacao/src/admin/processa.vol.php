
<?php
session_start();

include_once("conexao.php");

$nome= $_POST['vNome'];
$email= $_POST['vMail'];
$telefone= $_POST['vTel'];
$ben = $_POST['vBen'];
$obs = $_POST['vObs'];


$sql = " insert into voluntario(nome, email, telefone, benfeitoria, obs) values ('$nome', '$email', '$telefone', '$ben', '$obs') ";
$salvar = mysqli_query($conecta,$sql);

if ($salvar) {
			echo "<script>
                          alert('Voluntário cadastrado com sucesso!');
                          location.href='cad.vol.php';
	              </script>";
}else{
			echo "<script>
                          alert('Voluntário não foi cadastrado com sucesso!');
                          location.href='cad.vol.php';
	              </script>";
}

?>

