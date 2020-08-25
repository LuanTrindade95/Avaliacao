<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Candidato</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="../img/logo.png">
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Materialize css-->
		<link rel="stylesheet" type="
		text/css" href="../css/materialize.css">
		<link rel="stylesheet" type="
		text/css" href="../css/custom.css">
	</head>
	<body class="black">
		<!-- DropDown -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="Rh.Candidato.php">Candidato</a></li>
			<li class="divider"></li>
			<li><a href="Rh.Vaga.php">Vaga</a></li>
			<li class="divider"></li>
			<li><a href="Rh.Tecnologia.php">Tecnologia</a></li>
		</ul>
		<!-- NavBar -->
	    <nav class="black">
	    	<div class="container navbar-fixed">
			    <div class="nav-wrapperz-depth-5">
				    <a href="../index.php" class="brand-logo"><img src="../img/logo.png"></a>
				    <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a href="#">Home</a></li>
				        <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
				        <li><a href="collapsible.html">Contato</a></li>
				    </ul>
			    </div>
			</div>
	    </nav>

	    <section class="home grey darken-3">
	    	<!--Imagem de fundo-->
	    	<div class="row banner transparent col s12 m9">
	    		<div class="container">
	    			<div class="col s12">
	    				<div class="container center white-text centered">
		    				<caption class="white-text"><h4>Candidatos</h4></caption>
			    		</div>
		    			<table class="center white-text centered responsive-table z-depth-5">
					        <thead>
					            <tr class="z-depth-5">
						            <th>Nome</th>
						            <th>E-mail</th>
						            <th>Cargo Pretendido</th>
						            <th>Ações</th>
					            </tr>
					        </thead>
					        <tbody>
					          	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>
					         	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>
					         	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>
					         	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>
					         	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>
					         	<tr>
						            <td>Alvin</td>
						            <td>alvin@gmail.com</td>
						            <td>Desenvolvedor WEB</td>
						            <td>Relatorio</td>
					         	</tr>			          	
					        </tbody>
				        </table>
			        </div>
	    		</div>
	    		<div class="row col s12 m10">
	    			<br><br>
	    			<a class="z-depth-5 btn-floating btn-large waves-effect waves-light black right modal-trigger" href="#modal">
	    				<i class="material-icons">add</i>
	    			</a>
	    		</div>
	    		<!-- Modal Trigger -->
				  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

				  <!-- Modal Structure -->
				  <div id="modal1" class="modal">
				    <div class="modal-content">
				      <h4>Modal Header</h4>
				      <p>A bunch of text</p>
				    </div>
				    <div class="modal-footer">
				      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
				    </div>
				  </div>
	    	</div>
	    </section>
	    <footer class="fixed page-footer black text-white">
	    	<!--Rodapé-->
	        <div class="container center">
		        <div class="footer-copyright">
		            <div class="container">
		            © 2019 - Todos os Direitos Reservados
		            </div>
		        </div>
	    	</div>
			<!--Jquery-->
			<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
			
			<!--Materialize JS-->
			<script src="js/materialize.js">
				document.addEventListener('DOMContentLoaded', function() {
    			var elems = document.querySelectorAll('.modal');
    			var instances = M.Modal.init(elems, options);
  			});
  		</script>

		</footer>
	</body>
</html>