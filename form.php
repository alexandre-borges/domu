<?php

/*This is for data base connection*/

	$link =  mysqli_connect("mysql.hostinger.com.br", "u184685466_ju", "JuvLyj5gzDy05NruWF", "u184685466_users");

	if (mysqli_connect_error()) {

		die ("ERROR 404 page not found!");

	} 

	$query = "INSERT INTO `users` (`name`, `phone`, `email` , `neighborhood`, `comment`) VALUES ('".$_POST['name']."','".$_POST['telefone']."','".$_POST['email']."','". $_POST['bairro']."','".$_POST['comment']."')";

	mysqli_query($link, $query);

	
/*This is php in order to send e-mail with information of the request*/

	if ($_POST['submit']) {			
			
	 	 if (!$_POST['name']) {

			 $error="<br />Por favor entre seu nome";

	 	 }

	 	 if (!$_POST['telefone']) {

			 $error="<br />Por favor entre seu telefone";

	 	 }
			
	 	 if (!$_POST['email']) {

			 $error.="<br />Por favor entre seu e-mail";

	 	 }

	 	 if (!$_POST['bairro']) {

			 $error="<br />Por favor entre seu bairro";

	 	 }

	 	 if (!$_POST['date1']) {

			 $error="<br />Por favor entre uma data";

	 	 }

			
	 	 if (!$_POST['comment']) {

			 $error.="<br />Por favor entre o especialista de interesse";

	 	 }
			
	 	 if ($error) {

 			$result='<div class="alert alert-danger"><strong>Houve erro(s) no seu requerimento:</strong>'.$error.'</div>';

	 	 } else {

			if (mail("contatomaosanta@gmail.com", "Comment from website!", "Name: ".$_POST['name']."\nTelefone: ".$_POST['telefone']." \nEmail: ".$_POST['email']." \nBairro: ".$_POST['bairro']." \nData1: ".$_POST['date1']." \nData2: ".$_POST['date2']." \nData3: ".$_POST['date3']." \nComment: ".$_POST['comment'])) {

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
		width:100%;
		padding:0 0 150px 0;
		margin:0 auto;
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
		margin:0 auto;

	}

	#cadastro h1 {
		font-size:300%;
		padding:30px 0 0 0;
	}

	.form-control {
		width:80%;
		margin-left: auto;
   		margin-right: auto;
	}
		
	.btn-primary {
  		color: #fff;
		background-color:#004274;
  		border-color: #2e6da4;
		margin-bottom:10px;
	}

	.title {
		margin-top:100px;
		margin-bottom:50px;
		font-size:300%;
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


	#footer {
		background-color:#004274;
		width:100%;
		font-size:70%;
		height:350px;

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


	#contato {
		padding:50px 0 0 0;

	}

	.data {
		margin-top:10px;
	}
	
  </style>

  </head>
 <body data-spy="scroll" data-target="#navbar-maoSanta">

<!--Navegation bar-->

	<div class="navbar navbar-default navbar-fixed-top" id="navbar-maoSanta">
		<div class="container">		


				<a href="http://maosantaservicos.com.br/" class="navbar-brand"><img src="maoSantaLogo.png" alt="Logo"></a>
			</div>

			
		</div>
	</div>

<!--Form area-->

	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<div id="cadastro">
					<h1>M&atilde;o Santa Servi&ccedil;os</h1>

					<p class="lead">Servi&ccedil;os e Pessoas de Confian&ccedil;a</p>

					<?php echo $result; ?>

					<form class="form" role="form" method="post">
 						<div class="form-group">
 							<!--<label for="name">Nome</label>-->
							<input class="form-control" type="text" name="name" placeholder="Nome Completo" />
 						</div>

						<div class="form-group">
 							<!--<label for="telefone">Telefone</label>-->
							<input class="form-control" type="text" name="telefone" placeholder="Telefone" />
 						</div>

 						<div class="form-group">
 							<!--<label for="email">E-mail</label>-->
							<input class="form-control" type="email" name="email" placeholder="E-mail" />
 						</div>

						<div class="form-group">
 							<!--<label for="bairro">Bairro</label>-->
							<input class="form-control" type="text" name="bairro" placeholder="Bairro" />
 						</div>

						<div class="form-group">
 							<label for="date">Escolha tr&ecirc;s datas para uma visita</label>
							<input class="form-control data" type="date" name="date1" />
							<input class="form-control data" type="date" name="date2" />
							<input class="form-control data" type="date" name="date3" />
 						</div>


 						<div class="form-group">
 							<!--<label for="comment">Servi&ccedil;o Requerido</label>-->
							<textarea class="form-control" name="comment" placeholder="Por favor, descreva o servi&ccedil;o desejado detalhadamente."></textarea>
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

<!--Footer area-->	

	<div class="container" id="footer">
		
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
