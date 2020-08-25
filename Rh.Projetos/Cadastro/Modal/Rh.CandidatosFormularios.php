<?php
	include 'D:/Wampserver/www/cursophp.com/Avaliação Tecnica BSN/Rh.Projetos/Classes/CandidatoRepositorio.Class.php';

	//$CandidatoRepositorio = new CandidatoRepositorio();
	//$resultado = $CandidatoRepositorio->ListarCargoPretendido();
	var_dump($resultado);
	function ImprimirVaga()
	{
		global $resultado;
		var_dump($resultado);
		foreach($resultado as $value)
		{
		 	echo "<option value='".$value['id']."'>".$value['descricao']."</option>";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>	
		<center>
			<form action="../Receptor/Rh.CandidatosReceptor.php" method="POST"><!-- Get envia as informações pela url --> <!-- post envia encapsulada sem que o usuario veja -->
				<fieldset style="width: 25%">
					<legend>Informações Pessoais</legend>
						Nome:
						<input type="text" name="nome" required autofocus autocomplete="on" maxlength="25" placeholder="Informe Seu Nome"><br><br>

						Email:
						<input type="email" name="email" required autocomplete="on" placeholder="informes seu email"><br><br>

						RG:
						<input type="number" name="rg" required><br><br>

						CPF:
						<input type="number" name="cpf" required><br><br>

						Data de Nascimento:
						<input type="date" name="dtnasc" required><br><br>

						Sexo:
						<input type="radio" name="sexo" value="M" checked>Masculino<br>
					    <input type="radio" name="sexo" value="F">Feminino<br><br>

					    Endereço:
					    <input type="text" name="endereço" required><br><br>

					    Telefone:
						<input type="tel" name="telefone"><br><br>

						Cidade:
						<input type="text" name="cidade"><br><br>

						Nascionalidade:
						<input type="text" name="nascionalidade"><br><br>

						Formação:
						<input type="text" name="formacao"><br><br>

						Cargo Pretendido:
						<select id="vaga" name="vaga">
							<option value=""></option>
							<?php ImprimirVaga(); ?>
						</select> <br><br>

						Tec. Conhecidas: <br>
						<select id="tecnologias" name="tecnologias[]" multiple>

						</select> <br><br>

						<input type="hidden" name="idCandidato" id="idCandidato" value="0" />

						<br><input type="submit" name="btn-enviar" value="Enviar">
				</fieldset>
			</form>
		</center>

		<!-- Modal -->
		<div id="modal" class="modal">
		    <div class="modal-content">
		        <h4>Modal Header</h4>
		        <p>A bunch of text</p>
		    </div>
		    <div class="modal-footer">
		        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		</div>
	</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
	{
		var imprimirTecnologias = function()
		{
			$.ajax({
				url: "Rh.CandidatosReceptor.php",
				method: "POST",
				data: 
				{
					acao: 'imprimirTecnologias',
					idVaga: $('#vaga').val(),
					idCandidato: $('#idCandidato').val()
				},
				error: function(error) {
					console.log(error);
				},
				success: function(datas) {
					$('#tecnologias').empty().append('<option value=""></option>');

					let selected = "";
					datas.forEach(function(d)
					{	
						selected = "";
						if( d.Selecionado == 1) 
						{
							selected = "selected";
						}

						$('#tecnologias').append('<option '+ selected +' value="'+ d.id +'">'+ d.descricao +'</option>');
					});
				}
			});
		};

		$('#vaga').on('change', function(e)
		{
			imprimirTecnologias();
		});
	}); 

	document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.modal');
    	var instances = M.Modal.init(elems, options);
  	});
</script>