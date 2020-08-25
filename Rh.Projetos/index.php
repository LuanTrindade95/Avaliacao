<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Materialize</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="img/logo.png">
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Materialize css-->
		<link rel="stylesheet" type="
		text/css" href="css/materialize.css">
		<link rel="stylesheet" type="
		text/css" href="css/custom.css">
	</head>
	<body class="black">
		<!-- DropDown -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="Cadastro/Rh.Candidato.php">Candidato</a></li>
			<li><a href="Cadastro/Rh.Vaga.php">Vaga</a></li>
			<li class="divider"></li>
			<li><a href="Cadastro/Rh.Tecnologia.php">Tecnologia</a></li>
		</ul>
		<!-- NavBar -->
	    <nav class="black">
	    	<div class="container navbar-fixed">
			    <div class="nav-wrapperz-depth-5">
				    <a href="#" class="brand-logo"><img src="img/logo.png"></a>
				    <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a href="#">Home</a></li>
				        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
				        <li><a href="collapsible.html">Contato</a></li>
				    </ul>
			    </div>
			</div>
	    </nav>	    

	    <section class="home grey darken-3">
	    	<!--Parallax-->
	    	<!-- <div class="parallax-container">
		        <div class="parallax"><img src="img/fundo_.jpg"></div>
		    </div> -->
	    	<!--Imagem de fundo-->
	    	<div class=" row banner transparent col s12 m9 center ">
	    		<img class="responsive-img" src="img/logomarca.png">
	    		<div class="container text-lighten-4 white-text text-size">
	    			<div class="row col s12 center">
		    			<h3>Nossa História</h3>
			    		<p>Pode até parecer, mas não somos uma empresa de desenvolvimento de websites, mas somos, sim, provedores de soluções e serviços ideais para atender ao mais exigente mercado de Tecnologia. Nossa equipe é altamente qualificada e pronta para enfrentar qualquer desafio na área de TI, seja ele de pequeno, médio ou grande porte. Não temos limites para criatividade e nosso maior orgulho é a qualidade dos projetos que entregamos. Cliente satisfeito é nossa obrigação.
						A BSN Tecnologia e Serviços de TI foi criada a partir de um ideal: oferecer soluções inovadoras em tecnologia, de alta qualidade e com o melhor custo-benefício da região. Desenvolvemos e oferecemos soluções na medida para atender as necessidades de nossos clientes, de forma a gerar retorno financeiro com a implantação da tecnologia, otimizando os processos internos e a captação de novos clientes para o negócio.</p>
		    		</div>
		    	</div>	    		
	    	</div>
	    	<!--Parallax-->
	    	<!-- <div class="parallax-container">
			    <div class="parallax"><img src="img/fundo_.jpg"></div>
			</div> -->
	    </section>

	    <footer class="row page-footer black text-white">
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
			<script src="js/materialize.js"></script>
		</footer>
	</body>
</html>