<?php

$score = 0;

//Teste la Q1
if ($_GET["q1"] == "2001") {
  echo "Question 1: Correct !";
  $score += 2;
} else {
  echo "Question 1: Faux, la bonne réponse était 2001.";
}

//Teste la Q2
if ($_GET["q2"] == "8") {
  echo "Question 2: Correct !";
  $score += 2;
} else {
  echo "Question 2: Faux, la bonne réponse était 8.";
}

//Teste la Q3
if ($_GET["q3"] == "Corona") {
  echo "Question 3: Correct !";
  $score += 2;
} else {
  echo "Question 3: Faux, la bonne réponse était Corona.";
}

//Teste la Q4
if ($_GET["q4"] == "Nissan Skyline") {
  echo "Question 4: Correct !";
  $score += 2;
} else {
  echo "Question 4: Faux, la bonne réponse était Nissan Skyline.";
}

//Teste la Q5
if (isset($_GET["q5r2"]) && isset($_GET["q5r3"])) {
  echo "Question 5: Correct !";
  $score += 2;
} else {
  echo "Question 5: Faux, la bonne réponse était Ja Rule et Ludacris.";
}

//Teste la Q10
if ($_GET["q10"] == "ff3") {
  echo "Question 10: Ok, on est sur la même longueur d'onde.";
  $score += 2;
} else {
  echo "Tu n'as pas répondu Fast and Furious: Tokyo Drift, tu viens donc de perdre 2 points.";
  $score -= 2;
}

//Score
echo "Votre score est de " . $score . "/20.";

//Avis sur le score
if ($score >= 16) {
  echo "Drift King !";
} else if ($score < 0) {
  echo "Tu n'y connais rien et en plus, Tokyo Drift n'est pas le pire Fast & Furious pour toi...";
} else {
  echo "Vous êtes du genre à rouler en Multipla non?";
}
