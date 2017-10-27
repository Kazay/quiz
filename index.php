<?php
session_start();
require_once ('./createForm.php');
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
		<?php
			echo createJumbotron("./templates/images/head.jpg", "Quiz 2 Furious", "The ultimate Fast and Furious quiz");
		?>
  <section class="container">
    <form action="./script.php">

			<!-- Recupere et affiche le score et le commentaire attribué à la note -->
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

      <?php
      echo createQuestion("1", "En quelle année est sorti le premier Fast and Furious ?");
      echo createInput("radio", "q1r1", "q1", "1999");
      echo createInput("radio", "q1r2", "q1", "2001");
      echo createInput("radio", "q1r3", "q1", "2003");
      echo createInput("radio", "q1r4", "q1", "2005");
      echo closeTag("div");
      ?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r1style"]; ?>">
				<?php
				if(isset($_SESSION["r1"])) {
					echo $_SESSION["r1"];
				}
				?>
			</div>

			<?php
			echo createQuestion("2", "Combien de films compte la franchise ?");
			echo createInputTyping("number", "q2");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r2style"]; ?>">
				<?php
				if(isset($_SESSION["r2"])) {
					echo $_SESSION["r2"];
				}
				?>
			</div>


			<?php
			echo createQuestion("3", "Quelle est la boisson préférée de Toretto ?");
			echo createInput("radio", "q3r1", "q3", "Cacolac");
			echo createInput("radio", "q3r2", "q3", "8-6");
			echo createInput("radio", "q3r3", "q3", "Corona");
			echo createInput("radio", "q3r4", "q3", "Bud Light");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r3style"]; ?>">
				<?php
				if(isset($_SESSION["r3"])) {
					echo $_SESSION["r3"];
				}
				?>
			</div>

			<?php
			echo createQuestion("4", "Quelle voiture conduit Brian au début de 2 Fast 2 Furious ?");
			echo createInput("radio", "q4r1", "q4", "Nissan Skyline");
			echo createInput("radio", "q4r2", "q4", "Renault Kangoo");
			echo createInput("radio", "q4r3", "q4", "Honda s2000");
			echo createInput("radio", "q4r4", "q4", "Renault Fuego");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r4style"]; ?>">
				<?php
				if(isset($_SESSION["r4"])) {
					echo $_SESSION["r4"];
				}
				?>
			</div>

			<?php
			echo createQuestion("5", "Quel(s) rappeur(s) est/sont présent(s) dans la franchise ?");
			echo createInput("checkbox", "q5r1", "q5", "Matt Houston");
			echo createInput("checkbox", "q5r2", "q5", "Ja Rule");
			echo createInput("checkbox", "q5r3", "q5", "Ludacris");
			echo createInput("checkbox", "q5r4", "q5", "50 Cent");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r5style"]; ?>">
				<?php
				if(isset($_SESSION["r5"])) {
					echo $_SESSION["r5"];
				}
				?>
			</div>

			<?php
			echo createQuestion("6", "Où se déroule Fast & Furious 5 ?");
			echo createInput("radio", "q6r1", "q6", "Los Angeles");
			echo createInput("radio", "q6r2", "q6", "Auchan");
			echo createInput("radio", "q6r3", "q6", "Mexico");
			echo createInput("radio", "q6r4", "q6", "Bresil");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r6style"]; ?>">
				<?php
				if(isset($_SESSION["r6"])) {
					echo $_SESSION["r6"];
				}
				?>
			</div>

			<?php
			echo createQuestion("7", "Quel véhicule complètement probable poursuit le groupe à la fin de Fast & Furious 8 ?");
			echo createInput("radio", "q7r1", "q7", "Sous-marin nucleaire");
			echo createInput("radio", "q7r2", "q7", "Tank");
			echo createInput("radio", "q7r3", "q7", "Pope mobile");
			echo createInput("radio", "q7r4", "q7", "Avion cargo");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r7style"]; ?>">
				<?php
				if(isset($_SESSION["r7"])) {
					echo $_SESSION["r7"];
				}
				?>
			</div>

			<?php
			echo createQuestion("8", "A l'heure actuelle, qui est encore vivant dans la franchise ?");
			echo createInput("checkbox", "q8r1", "q8", "Brian");
			echo createInput("checkbox", "q8r2", "q8", "Han");
			echo createInput("checkbox", "q8r3", "q8", "Mia");
			echo createInput("checkbox", "q8r4", "q8", "Roman");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r8style"]; ?>">
				<?php
				if(isset($_SESSION["r8"])) {
					echo $_SESSION["r8"];
				}
				?>
			</div>

			<?php
			echo createQuestion("9", "Combien de nouveaux films ont été annoncés pour la franchise ?");
			echo createInputTyping("number", "q9");
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r2style"]; ?>">
				<?php
				if(isset($_SESSION["r2"])) {
					echo $_SESSION["r2"];
				}
				?>
			</div>

			<?php
			echo createQuestion("10", "Quel est le pire Fast and Furious ?");
			echo createSelect('q10', [
				[
					'value' => 'ff1',
					'content' => 'The Fast and the Furious',
				],
				[
					'value' => 'ff2',
					'content' => '2 Fast 2 Furious',
				],
				[
					'value' => 'ff3',
					'content' => 'Fast and Furious: Tokyo Drift',
				],
				[
					'value' => 'ff4',
					'content' => 'Fast & Furious',
				],
				[
					'value' => 'ff5',
					'content' => 'Fast Five',
				],
				[
					'value' => 'ff6',
					'content' => 'Fast & Furious 6',
				],
				[
					'value' => 'ff7',
					'content' => 'Furious 7',
				],
				[
					'value' => 'ff8',
					'content' => 'The Fate of the Furious',
				],
				]);
			echo closeTag("div");
			?>
			<!-- Verifie la validite de la reponse et affiche le resultat -->
			<div class="container rounded mb-3 <?php echo $_SESSION["r10style"]; ?>">
				<?php
				if(isset($_SESSION["r10"])) {
					echo $_SESSION["r10"];
				}
				?>
			</div>

			<?php
			echo createSubmit("Valider vos réponses");
			?>

  </section>
</main>
<?php
  for ($i = 1; $i < 11; $i++) {
    unset($_SESSION["r$i"]);
    unset($_SESSION["r$i" . "style"]);
  }
  unset($_SESSION["score"]);
  unset($_SESSION["comment"]);
 ?>
</body>
</html>
