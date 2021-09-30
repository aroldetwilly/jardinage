<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/moisstyles.css" rel="stylesheet"  type="text/css">
    <title>Mon potager</title>
</head>
<body>
	<section id="container">
		<div id="aubergine">
			<h1>Aubergine</h1>
			<p>L'aubergine est un légume-fruit riche en composés phénoliques et alcaloïdes antioxydants aux effets favorables sur le syndrome métabolique, elle est l'objet de nombreuses publications scientifiques</p>		
		</div>
		<div id="cultiver">
			<h2>cultiver :</h2>
			<iframe width="545" height="300" src="https://www.youtube.com/embed/QPpNSeOnuro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div id="recettes">
			<h2>cuisiner :</a></h2>
			<p> En Cliquant sur le <a href="https://www.marmiton.org/recettes/recherche.aspx?aqt=aubergine"> lien</a> vous accederez a une liste de recette avec ce legume :</p>
			<p>lasagnes, trate, farcies... </p>
			<img src="images/aubergine.png" alt="image d'une aubergine violette" id="auber">
			</div>
		<div id="retour">	
			<a href="/home.php"><input type="submit" id="button" value="retour" ></a>
		</div>
	</section>
	
<?php
 include("piedPage.php");
?>
 </body>
 </html>