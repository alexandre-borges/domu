<?php

	if ($_POST['submit']) {			
			
	 	 if (!$_POST['name']) {

			 $error="<br />Por favor entre seu nome";

	 	 }
			
	 	 if (!$_POST['email']) {

			 $error.="<br />Por favor entre seu e-mail";

	 	 }
			
	 	 if (!$_POST['comment']) {

			 $error.="<br />Por favor entre o especialista de interesse";

	 	 }
			
	 	 if ($error) {

 			$result='<div class="alert alert-danger"><strong>Houve erro(s) no seu requerimento:</strong>'.$error.'</div>';

	 	 } else {

			if (mail("contatomaosanta@gmail.com", "Comment from website!", "Name: ".$_POST['name']." Email: ".$_POST['email']." Comment: ".$_POST['comment'])) {

 				$result='<div class="alert alert-success"><strong>Obrigado!</strong> Entraremos em contato.</div>';

 			} else {

 				$result='<div class="alert alert-danger">Desculpe, houve um erro no envio do e-mail do requerimento. Tente novamente mais tarde.</div>';

 			}
		 }
 	}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mao Santa Servicos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>

	body {
  		position: relative;
	}

	.navbar-brand {
 		padding:0;
		margin:0;
	}

	.navbar-brand > img {
 		display: block;
		height:100%;
	}


	#topContainer {
		background-image:url("trabalhadorAutonomo.jpg");
		width:100%;
		background-size:cover;
	}

	#topRow {
		margin-top:150px;
		text-align:center;
	}

	#cadastro {
		background-color:#F2F2F2;
		height:70%;
		width:65%;
		border-radius:10px;
		margin:auto;

	}

	#cadastro h1 {
		font-size:300%;
		padding:30px 0 0 0;
	}

	.marginTop {
		margin-top:10px;
	}

	.form-control {
		width:80%;
		margin-left: auto;
   		margin-right: auto;
	}
		
	.btn-primary {
  		color: #fff;
  		background-color: #337ab7;
  		border-color: #2e6da4;
		margin-bottom:10px;
	}

	.title {
		margin-top:100px;
		margin-bottom:50px;
		font-size:300%;
	}
	
	.text-justify {
    		text-indent: 50px;
	}


	.btn-icon {
		text-align:center;
  		color: #333;
 		background-color: #ECF7FC;
  		border-color: ##2ECCFA;
		height:27%;
		width:23%;
		padding:20px 0 0 0;
	}
	
	.btn-icon img {
  		width:90%;
		height:80%;
	}

	.col-md-4 {
		margin-bottom:50px;
	}

	#footer {
		background-color:#CEE3F6;
		width:100%;
	}
	
	.white {
		color:#FFFFFF;
	}	
	
	.glyphicon img {
		position:relative;
		margin-left:-40px;
		margin-top:-15px;
  		width:20%;
		height:20%;
	}

	#fb {
		color: #FFFFFF;
   		text-decoration: none;
	}

	#fb:hover {
		color: #FFFFFF;
   		text-decoration: underline;
	}

	.btn-parceria {
		text-align:center;
  		color: #333;
		padding:20px 0 0 0;
		background-color:#CEE3F6;
	}

	#pastoral {
		height:120px;
		width:170px;
	}

	#btn-logIn {
		margin-bottom:-12px;
	}

	#contato {
		padding:100px 0 0 0;
	}

  </style>

  </head>
  <body data-spy="scroll" data-target="#navbar-maoSanta">

	<div class="navbar navbar-default navbar-fixed-top" id="navbar-maoSanta">
		<div class="container">		
			<div class="navbar-header">				
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="index.html" class="navbar-brand"><img src="maoSantaLogo.png" alt="Logo"></a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#servicos">Servi&ccedil;os</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>

				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control" />
					</div>

					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" />
	
					</div>
		
					<div class="form-group" id="btn-logIn">
						<button type="submit" class="btn btn-primary">Log In</button>
					</div>				
				</form>
			</div>
		</div>
	</div>

	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<div id="cadastro">
					<h1>M&atilde;o Santa Servi&ccedil;os</h1>

					<p class="lead">Servi&ccedil;os e Pessoas de Confian&ccedil;a</p>

					<?php echo $result; ?>

					<form class="form" role="form" method="post">
 						<div class="form-group">
 							<label for="name">Nome</label>
							<input class="form-control" type="text" name="name" placeholder="Nome Completo" />
 						</div>

 						<div class="form-group">
 							<label for="email">E-mail</label>
							<input class="form-control" type="email" name="email" placeholder="E-mail" />
 						</div>

 						<div class="form-group">
 							<label for="comment">Servi&ccedil;o Requerido</label>
							<textarea class="form-control" name="comment" placeholder="Informa&ccedil;&atilde;o sobre o servi&ccedil;o desejado"></textarea>
 						</div>
<!--

 						<div class="form-group">
							<label for="password">Senha</label>
 							<input class="form-control" type="password" name="password" placeholder="Senha"/>
 						</div>

 						<div class="form-group">
							<label for="password">Confirme a senha</label>
 							<input class="form-control" type="password" name="confirmPassword" placeholder="Confirme senha"/>
 						</div>
-->

 						<input type="submit" name="submit" class="btn btn-primary" value="Pe&ccedil;a orcamento" />
 					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container contentContainer">
		<div class="row" id="sobre">

			<h1 class="text-center title">Quem somos?</h1>

			<p class="lead text-justify">A M&atilde;o Santa &eacute; um neg&oacute;cio social engajado na promo&ccedil;&atilde;o da inclus&atilde;o social conectando o potencial dos profissionais aut&ocirc;nomos das comunidades, principalmente mulheres, com a demanda por servi&ccedil;os residenciais de qualidade no Rio de Janeiro.</p>


			<h1 class="text-center title">Prop&oacute;sito</h1>
			
			<p class="lead text-justify">A inten&ccedil;&atilde;o da M&atilde;o Santa &eacute; gerar significativo impacto social na vida dos moradores dos bairros do Rio de Janeiro, sendo eles:</p>

			<p class="lead text-justify">Clientes: a experi&ecirc;ncia de um servi&ccedil;o com as garantias b&aacute;sicas, profissional, e a certeza de estar contribuindo com a inclus&atilde;o das mulheres no mercado de trabalho.</p>

			<p class="lead text-justify">Profissionais: Incremento de renda, desenvolvimento pessoal atrav&eacute;s de Coaching e din&acirc;micas associadas a nossa metodologia de trabalho, assim como aperfei&ccedil;oamento t&eacute;cnico.</p>

			<h1 class="text-center title">O que fazemos?</h1>

			<p class="lead text-justify">A M&atilde;o Santa faz o trabalho de intermedia&ccedil;&atilde;o entre os profissionais de servi&ccedil;os residenciais e os moradores dos bairros, opera desenvolvendo redes de parcerias estrat&eacute;gicas e a equipe da M&atilde;o Santa realiza seu pr&oacute;prio treinamento comportamental, coaching e oferece consultoria gratuita para qualifica&ccedil;&atilde;o e formaliza&ccedil;&atilde;o (MEI) dos profissionais.</p>
		</div>

		<div class="row" id="servicos">
			<h1 class="text-center title">Servi&ccedil;os</h1>
			
			<div class="col-md-4 text-center">
				<h2>Eletricista</h2>

				<button class="btn btn-icon"><img src="icon/eletricista.png"/></button>
				<br></br>

				<p class="lead"></p>
			</div>

			<div class="col-md-4 text-center">
				<h2>Encanador</h2>

				<button class="btn btn-icon"><img src="icon/encanador.png"/></button>
				<br></br>

				<p class="lead"></p>
			</div>

			<div class="col-md-4 text-center">
				<h2>Marceneiro</h2>

				<button class="btn btn-icon"><img src="icon/marceneiro.png"/></button>
				<br></br>

				<p class="lead"></p>
			</div>

		</div>

		<div class="row">		
			<div class="col-md-4 text-center">
				<h2>Pedreiro</h2>

				<button class="btn btn-icon"><img src="icon/pedreiro.png"/></button>
				<br></br>

				<p class="lead"></p>
			</div>

			<div class="col-md-4 text-center">
				<h2>Pequenos reparos</h2>
				
				<button class="btn btn-icon"><img src="icon/pequenosReparos.png"/></button>

				<br></br>
		
				<p class="lead"></p>
			</div>

			<div class="col-md-4 text-center">
				<h2>Pintor</h2>

				<button class="btn btn-icon"><img src="icon/pintor.png"/></button>
				<br></br>

				<p class="lead"></p>
			</div>
		</div>
	</div>

	<div class="container contentContainer" id="footer">
		<div class="row white">
			<h1 class="text-center title">Parcerias</h1>

			<div class="col-md-3 text-center">
				<h2>Empresa Junior</h2>

				<p class="lead"></p>

				<button class="btn btn-parceria"><a href="http://www.empresajunior.com.br/"><img src="parceria/empresaJunior.png"/></a></button>
			</div>

			<div class="col-md-3 text-center">
				<h2>Pastoral PUC-Rio</h2>

				<p class="lead"></p>

				<button class="btn btn-parceria"><a href="http://www.pastoraluniversitaria.com.br/"><img id="pastoral" src="parceria/pastoral.png"/></a></button>
			</div>

			<div class="col-md-3 text-center">
				<h2>Rede Cidad&atilde;</h2>

				<p class="lead"></p>

				<button class="btn btn-parceria"><a href="http://www.redecidada.org.br/"><img src="parceria/redeCidada.png"/></a></button>
			</div>

			<div class="col-md-3 text-center">
				<h2>Shell Iniciativa Jovem</h2>

				<p class="lead"></p>

				<button class="btn btn-parceria"><a href="http://www.livewirebrasil.com/"><img src="parceria/shellIniciativaJovem.png"/></a></button>
			</div>
		</div>

		<div class="row white text-center" id="contato">
				<h2>Contato</h1>

				<p class="lead">(21) 95101-2948<span class="glyphicon"><img src="whatsapp.png"/></span></p>

				<p class="lead">CONTATOMAOSANTA@GMAIL.COM</p>

				<p class="lead"><a id="fb" href="https://www.facebook.com/maosantaservicos/">FACEBOOK/MAOSANTASERVICOS</a></p>
		</div>
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery download -->
    <script src="js/jquery.min.js"></script>

	<script>
			
		$(".contentContainer").css("min-height", $(window).height());

	</script>
  </body>
</html>
