<?php
	require_once 'Classes/VagasRepositorio.Class.php';

	$VagasRepositorio = new vagasRepositorio();
	$resultado = $VagasRepositorio->Listar();
	var_dump($resultado);
	function Imprimir()
	{
		global $resultado;
		foreach($resultado as $value)
		{
		 	echo "<option value='".$value['id']."'>".$value['descricao']."</option>";
		}
	}
?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<title>Cadastrar Vagas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="../Receptor/Rh.VagasReceptor.php" method="POST"><!-- Get envia as informações pela url --> <!-- post envia encapsulada sem que o usuario veja -->
			<fieldset>
				<legend>Cadastrar Vaga</legend>
					Descrição:
					<input type="text" name="descricao" required autofocus autocomplete="on"><br><br>
					Tecnologias: <br>
					<select id="tecnologias" name="tecnologias[]" size="3" multiple>
						<?php Imprimir(); ?>
					</select> <br>
					<br><input type="submit" name="btn-enviar" value="Enviar">
			</fieldset>
		</form>
	</body>
</html>