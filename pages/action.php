<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plena</title>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <link rel="stylesheet" href="../_css/bootstrap.css"/>	
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Dancing+Script" rel="stylesheet"> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-6 col-xs-10"><p class="text">II Conferência</p><img class="logo" src="../_css/logotipo.jpg" alt="Imagem"/></div>
			<div class="col-md-3 col-xs-1"></div>
		</div>

		<div class="inner_space"></div>
		<div class="row">
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-6 col-xs-10">
				<?php
					if(isset($_POST['user']) && isset($_POST['password'])){
						include("db_connection.php");
						
						$user = $_POST['user'];
						$password = $_POST['password'];
						if($password == '777'){
							$query = "INSERT INTO registered(name, password) values('$user','$password')";
							if (!$result = mysqli_query($con, $query)) {
	        					exit(mysqli_error($con));
	    					}
							echo "<div class='bible_text'>Parabéns!!! Você chegou no seu objetivo!!!! Agora é só aguardar a Conferência!!! Dias 25 e 26 de Outubro de 2016...</div>";
						}
						else{
							echo "<div class='bible_text'>Senha incorreta!!! Continue buscando!!!!</div>";
						}
					}
    			?>
				<a href="../index.html" class="link">Voltar</a>
			</div>
			<div class="col-md-3 col-xs-1"></div>
		</div>
	</div>
</body>
</html>
 