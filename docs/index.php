<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Sistema de Login simples criado usando somente PHP">
<meta name="author" content="Gousro">
<link rel="stylesheet" href="css/style.css">
<title>Sistema de Login</title>
</head>

<body>
<div class="login">
<form method="post" action="painel/processar-login.php">
	<div class="titulo-login">
		<p>Login:</p>
	</div>
	<div>
		Nome: <input type="text" name="id_usuario" placeholder="Digite o nome do usuário" autofocus required>
	</div>
	<div>
		Senha: <input type="password" name="id_senha" placeholder="Digite a senha do usuário" required>
	</div>
	<div class="botao-login">
		<input type="submit" value="Logar">
	</div>
</form>
</div>
</body>
</html>