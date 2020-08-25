<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastrar Tecnologias</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="../Receptor/Rh.TecnologiasReceptor.php" method="post"><!-- Get envia as informações pela url --> <!-- post envia encapsulada sem que o usuario veja -->
			<fieldset>
				<legend>Cadastrar Tecnologia</legend>
					Descrição:
					<input type="text" name="descricao" required autofocus autocomplete="on"><br><br>
					<br><input type="submit" name="btn-enviar" value="Enviar">
			</fieldset>
		</form>
	</body>
</html>