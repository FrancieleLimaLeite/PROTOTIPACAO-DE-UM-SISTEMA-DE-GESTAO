
<?php
session_start();

include_once("conexao.php");

$oficina = $_POST['oficina'];
$professor= $_POST['professor'];
$turno= $_POST['turno'];

$sql = " insert into oficinas(oficina, professor, turno) values ('$oficina', '$professor', '$turno') ";
$salvar = mysqli_query($conecta,$sql);

mysqli_close($conecta);

if ($salvar) {
			echo "<script>
                          alert('Oficina cadastrada com sucesso!');
                          location.href='cad.disciplina.php';
	              </script>";
}else{
			echo "<script>
                          alert('Já existe uma oficina cadastrada com esse nome, por favor verifique a lista de oficinas.');
                          location.href='cad.disciplina.php';
	              </script>";
}

?>

