<?php


// Start the session
session_start();


$score = 0;

//Teste la Q1
if ($_GET["q1"] == "2001") {
  //echo "Question 1: Correct !<br>";
  $_SESSION["r1"] = "Question 1: Correct !";
  //$score += 2;
} else {
  //echo "Question 1: Faux, la bonne réponse était 2001.<br>";
  $_SESSION["r1"] = "Question 1: Faux, la bonne réponse était 2001.";
}

//Teste la Q2
if ($_GET["q2"] == "8") {
  //echo "Question 2: Correct !<br>";
  $_SESSION["r2"] = "Question 2: Correct !";
  $score += 2;
} else {
  //echo "Question 2: Faux, la bonne réponse était 8.<br>";
  $_SESSION["r2"] = "Question 2: Faux, la bonne réponse était 8.";
}

//Teste la Q3
if ($_GET["q3"] == "Corona") {
  //echo "Question 3: Correct !<br>";
  $_SESSION["r3"] = "Question 3: Correct !";
  $score += 2;
} else {
  //echo "Question 3: Faux, la bonne réponse était Corona.<br>";
  $_SESSION["r3"] = "Question 3: Faux, la bonne réponse était Corona.";
}

//Teste la Q4
if ($_GET["q4"] == "Nissan Skyline") {
  //echo "Question 4: Correct !<br>";
  $_SESSION["r4"] = "Question 4: Correct !";
  $score += 2;
} else {
  $_SESSION["r4"] = "Question 4: Faux, la bonne réponse était Nissan Skyline.<br>";
}

//Teste la Q5
if (isset($_GET["q5r2"]) && isset($_GET["q5r3"])) {
  //echo "Question 5: Correct !<br>";
  $_SESSION["r5"] = "Question 5: Correct !";
  $score += 2;
} else {
  $_SESSION["r5"] = "Question 5: Faux, la bonne réponse était Ja Rule et Ludacris.<br>";
}

//Teste la Q6
if ($_GET["q6"] == "Bresil") {
  //echo "Question 6: Correct !<br>";
  $_SESSION["r6"] = "Question 6: Correct !";
  $score += 2;
} else {
  $_SESSION["r6"] = "Question 6: Faux, THIS IS BRAZILLLL !§§!<br>";
}

//Teste la Q7
if ($_GET["q7"] == "Sous-marin nucléaire") {
  //echo "Question 7: Correct !<br>";
  $_SESSION["r7"] = "Question 7: Correct !";
  $score += 2;
} else {
  $_SESSION["r8"] = "Question 7: Faux, il s'agit d'un sous-marin nucléaire, narmol.<br>";
}

//Teste la Q8
if (isset($_GET["q8r1"]) && isset($_GET["q5r3"]) && isset($_GET["q8r4"])) {
  //echo "Question 8: Correct !<br>";
  $_SESSION["r8"] = "Question 8: Correct !";
  $score += 2;
} else {
  $_SESSION["r8"] = "Question 8: Faux, la bonne réponse était Brian, Mia et Roman.<br>";
}

//Teste la Q9
if ($_GET["q9"] == "2") {
  //echo "Question 2: Correct !<br>";
  $_SESSION["r9"] = "Question 9: Correct !";
  $score += 2;
} else {
  $_SESSION["r9"] = "Question 2: Faux, la bonne réponse était 8.<br>";
}

//Teste la Q10
if ($_GET["q10"] == "ff3") {
  //echo "Question 10: Ok, on est sur la même longueur d'onde.<br>";
  $_SESSION["r10"] = "Question 10: Correct !";
  $score += 2;
} else {
  $_SESSION["r10"] = "Tu n'as pas répondu Fast and Furious: Tokyo Drift, tu viens donc de perdre 2 points.<br>";
  $score -= 2;
}

//Score
$_SESSION["score"] = $score;

//echo "Votre score est de " . $score . "/20.<br>";

//Avis sur le score
if ($score >= 16) {
  $_SESSION["comment"] = "Drift King !";
}
else if ($score < 16 && $score >= 10) {
  $_SESSION["comment"] = "Pas fou mais tout n'est pas perdu.";
}
else if ($score < 0) {
  $_SESSION["comment"] = "Tu n'y connais rien mais en plus, tu penses que Fast and Furious: Tokyo Drift n'est pas le pire de la franchise...<br>";
} else {
  $_SESSION["comment"] = "Naze, tu es du genre à rouler en Multipla non?";
}

header('Location: ./index.php');
