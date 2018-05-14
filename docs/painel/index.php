<?php
session_start();
if(!$_SESSION['usuario']) {
	echo "Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa p&aacute;gina!";
	header("../index.php");
}elseif($_SESSION['usuario']) {

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bem vindo </title>
</head>

<body>
<?php
	echo "Bem vindo ao Painel!<br>";
	echo "<a href='logout.php'>Sair</a>";
?>
</body>
</html>
<?php } ?>