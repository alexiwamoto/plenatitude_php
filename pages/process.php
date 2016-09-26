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
<body class="body_decor">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-6 col-xs-10"><p class="text">II Conferência</p><img class="logo" src="../_css/logotipo.jpg" alt="Imagem"/></div>
			<div class="col-md-3 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-6 col-xs-10"><p class="date">Dias 25 e 26 de Outubro de 2016</p></div>
			<div class="col-md-3 col-xs-1"></div>
		</div>
		<div class="inner_space"></div>
		<div class="row">
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-6 col-xs-10">
				<?php
					$item = $_POST['search_item'];							
					$item_min = strtolower($item);
					if($item_min == 'deus'){
						echo "<div class='bible_text'>Busquem o Senhor enquanto se pode achá-lo; clamem por ele enquanto está perto.
						<br />Isaías 55.6<br /></div>
						<h2 class='number_text'>Parabéns !!! Você está no caminho certo!!!</h2>
						<div class='number_text'>Anote esse número: 498</div>
						<a href='login.html' class='link'><h2>E copie esse link</h2></a>
						<br />";
					} else{
						echo "<div class='bible_text'>Não desista!!! Continue buscando....<br /></div>
						
						<br />";
					}
				
				?>
				<a href="../index.html" class="link">Voltar</a>
			</div>
			<div class="col-md-3 col-xs-1"></div>
		</div>
	</div>
</body>
</html>




 