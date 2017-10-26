<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<title>Czaja Kevin, junior web developer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./templates/css/style.css">
</head>
<body>
	<main>
		<div class="mt-3 container jumbotron">
			<div class="row">
				<div class="col-6">
									<img class="rounded img-fluid" src="./templates/images/head.jpg">
				</div>
				<div class="col-6">
									<h1 class="display-3">Quiz 2 Furious</h1>
									<hr>
									<p class="lead">The ultimate Fast & Furious quiz</p>
				</div>
			</div>
		</div>
		<section class="container">
			<form action="./script.php">

				<div class="container score rounded">
					<?php
					if(isset($_SESSION["score"])) {
						echo $_SESSION["score"] . "/20.<br>";
					}
					if(isset($_SESSION["comment"])) {
						echo $_SESSION["comment"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 1</span> En quelle année est sorti le premier Fast and Furious ?</h4>
				<div class="d-flex justify-content-between form-group mt-3 mb-5">
					<label class="form-check-label" for="q1r1">
						<input class="form-check-input" type="radio" id="q1r1" name="q1" value="1999" checked>
						1999
					</label>
					<label class="form-check-label" for="q1r2">
						<input class="form-check-input" type="radio" id="q1r2" name="q1" value="2001">
						2001
					</label>
					<label class="form-check-label" for="q1r3">
						<input class="form-check-input" type="radio" id="q1r3" name="q1" value="2004">
						2003
					</label>
					<label class="form-check-label" for="q1r4">
						<input class="form-check-input" type="radio" id="q1r4" name="q1" value="2007">
						2005
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r1"])) {
						echo $_SESSION["r1"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 2</span> Combien de films compte la franchise ?</h4>
				<div class="form-group mt-3 mb-5">
					<input class="form-control" type="number" name="q2" placeholder="reponse" required>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r2"])) {
						echo $_SESSION["r2"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 3</span> Quelle est la boisson préférée de Toretto ?</h4>
				<div class="d-flex justify-content-between form-check mt-3 mb-5">
					<label class="form-check-label" for="q3r1">
						<input class="form-check-input" type="radio" id="q3r1" name="q3" value="Cacolac" checked>
						Cacolac
					</label>
					<label class="form-check-label" for="q3r2">
						<input class="form-check-input" type="radio" id="q3r2" name="q3" value="8-6">
						8-6
					</label>
					<label class="form-check-label" for="q3r3">
						<input class="form-check-input" type="radio" id="q3r3" name="q3" value="Corona">
						Corona
					</label>
					<label class="form-check-label" for="q3r4">
						<input class="form-check-input" type="radio" id="q3r4" name="q3" value="Bud Light">
						Bud Light
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r3"])) {
						echo $_SESSION["r3"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 4</span> Quelle voiture conduit Brian au début de 2 Fast 2 Furious ?</h4>
				<div class="d-flex justify-content-between form-check mt-3 mb-5">
					<label class="mr-3 form-check-label" for="q4r1">
						<input class="form-check-input" type="radio" id="q4r1" name="q4" value="Nissan Skyline" checked>
						Nissan Skyline
					</label>
					<label class="form-check-label" for="q4r2">
						<input class="form-check-input" type="radio" id="q4r2" name="q4" value="Renault Kangoo">
						Renault Kangoo
					</label>
					<label class="form-check-label" for="q4r3">
						<input class="form-check-input" type="radio" id="q4r3" name="q4" value="Honda s2000">
						Honda s2000
					</label>
					<label class="form-check-label" for="q4r4">
						<input class="form-check-input" type="radio" id="q4r4" name="q4" value="Renault Fuego">
						Renault Fuego
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r4"])) {
						echo $_SESSION["r4"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 5</span> Quel(s) rappeur(s) est/sont présent(s) dans la franchise ?</h4>
				<div class="d-flex justify-content-between form-check mt-3 mb-5">
					<label class="form-check-label" for="q5r1">
						<input class="form-check-input" type="checkbox" id="q5r1" name="q5r1" value="Matt Houston">
						Matt Houston
					</label>
					<label class="form-check-label" for="q5r2">
						<input class="form-check-input" type="checkbox" id="q5r2" name="q5r2" value="Ja Rule">
						Ja Rule
					</label>
					<label class="form-check-label" for="q5r3">
						<input class="form-check-input" type="checkbox" id="q5r3" name="q5r3" value="Ludacris">
						Ludacris
					</label>
					<label class="form-check-label" for="q5r4">
						<input class="form-check-input" type="checkbox" id="q5r4" name="q5r4" value="50 Cent">
						50 Cent
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r5"])) {
						echo $_SESSION["r5"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 6</span> Où se déroule Fast & Furious 5 ?</h4>
				<div class="d-flex justify-content-between form-group mt-3 mb-5">
					<label class="form-check-label" for="q6r1">
						<input class="form-check-input" type="radio" id="q6r1" name="q6" value="Los Angeles" checked>
						Los Angeles
					</label>
					<label class="form-check-label" for="q6r2">
						<input class="form-check-input" type="radio" id="q6r2" name="q6" value="Auchan">
						Sur le parking d'Auchan à Trappes
					</label>
					<label class="form-check-label" for="q6r3">
						<input class="form-check-input" type="radio" id="q6r3" name="q6" value="Mexico">
						Mexico
					</label>
					<label class="form-check-label" for="q6r4">
						<input class="form-check-input" type="radio" id="q6r4" name="q6" value="Bresil">
						Brésil
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r6"])) {
						echo $_SESSION["r6"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 7</span> Quel véhicule complètement probable poursuit le groupe à la fin de Fast & Furious 8 ?</h4>
				<div class="d-flex justify-content-between form-group mt-3 mb-5">
					<label class="form-check-label" for="q7r1">
						<input class="form-check-input" type="radio" id="q7r1" name="q7" value="Sous-marin nucléaire" checked>
						Sous-marin nucléaire
					</label>
					<label class="form-check-label" for="q7r2">
						<input class="form-check-input" type="radio" id="q7r2" name="q7" value="Tank">
						Tank
					</label>
					<label class="form-check-label" for="q7r3">
						<input class="form-check-input" type="radio" id="q7r3" name="q7" value="Pope mobile">
						Pope mobile
					</label>
					<label class="form-check-label" for="q7r4">
						<input class="form-check-input" type="radio" id="q7r4" name="q7" value="Avion cargo">
						Avion cargo
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r7"])) {
						echo $_SESSION["r7"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 8</span> A l'heure actuelle, qui est encore vivant dans la franchise ?</h4>
				<div class="d-flex justify-content-between form-check mt-3 mb-5">
					<label class="form-check-label" for="q8r1">
						<input class="form-check-input" type="checkbox" id="q8r1" name="q8r1" value="Brian">
						Brian O'Connor
					</label>
					<label class="form-check-label" for="q8r2">
						<input class="form-check-input" type="checkbox" id="q8r2" name="q8r2" value="Han">
						Han
					</label>
					<label class="form-check-label" for="q8r3">
						<input class="form-check-input" type="checkbox" id="q8r3" name="q8r3" value="Mia">
						Mia
					</label>
					<label class="form-check-label" for="q8r4">
						<input class="form-check-input" type="checkbox" id="q8r4" name="q8r4" value="Roman">
						Roman
					</label>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r8"])) {
						echo $_SESSION["r8"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 9</span> Combien de nouveaux films ont été annoncés pour la franchise ?</h4>
				<div class="form-group mt-3 mb-5">
					<input class="form-control" type="number" name="q9" placeholder="reponse" required>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r9"])) {
						echo $_SESSION["r9"];
					}
					?>
				</div>

				<h4><span class="badge badge-dark">Question 10</span> Quel est le pire Fast and Furious ?</h4>
				<div class="form-check mt-3 mb-5">
					<select class="form-control custom-select" name="q10">
						<option value="ff1">The Fast and the Furious</option>
						<option value="ff2">2 Fast 2 Furious</option>
						<option value="ff3">Fast and Furious: Tokyo Drift</option>
						<option value="ff4">Fast & Furious</option>
						<option value="ff5">Fast Five</option>
						<option value="ff6">Fast & Furious 6</option>
						<option value="ff7">Furious 7</option>
						<option value="ff8">The Fate of the Furious</option>
					</select>
				</div>
				<div class="container reponse rounded mb-3">
					<?php
					if(isset($_SESSION["r10"])) {
						echo $_SESSION["r10"];
					}
					?>
				</div>

				<input class="mb-3 btn btn-danger"type="submit" value="Valider les réponses">

			</form>
		</section>
	</main>
	<?php
		unset($_SESSION["r1"]);
		unset($_SESSION["r2"]);
		unset($_SESSION["r3"]);
		unset($_SESSION["r4"]);
		unset($_SESSION["r5"]);
		unset($_SESSION["r6"]);
		unset($_SESSION["r7"]);
		unset($_SESSION["r8"]);
		unset($_SESSION["r9"]);
		unset($_SESSION["r10"]);
		unset($_SESSION["score"]);
		unset($_SESSION["comment"]);
	 ?>
</body>
</html>
