<?php
$id_usuario = $_POST['id_usuario'];
$id_senha   = $_POST['id_senha'];

if ($id_usuario == 'admin' && $id_senha == 'admin') {
	session_start();
	$_SESSION['usuario'] = $id_usuario;
	echo "Processando dados...";
	header("Location: index.php");
}else {
	echo "Dados incorretos!";
	header("Location: ../index.php");
}
?>