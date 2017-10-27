<?php


// Start the session
session_start();

//Variable qui compte le score
$score = 0;

//Teste la Q1
if ($_GET["q1"] == "2001") {
  //Si la réponse est correcte
  $_SESSION["r1"] = "Question 1: Correct !";
  $_SESSION["r1style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r1"] = "Question 1: Faux, la bonne réponse était 2001.";
  $_SESSION["r1style"] = "wrong";
}

//Teste la Q2
if ($_GET["q2"] == "8") {
  //Si la réponse est correcte
  $_SESSION["r2"] = "Question 2: Correct !";
  $_SESSION["r2style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r2"] = "Question 2: Faux, la bonne réponse était 8.";
  $_SESSION["r2style"] = "wrong";

}

//Teste la Q3
if ($_GET["q3"] == "Corona") {
  //Si la réponse est correcte
  $_SESSION["r3"] = "Question 3: Correct !";
  $_SESSION["r3style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r3"] = "Question 3: Faux, la bonne réponse était Corona.";
  $_SESSION["r3style"] = "wrong";
}

//Teste la Q4
if ($_GET["q4"] == "Nissan Skyline") {
  //Si la réponse est correcte
  $_SESSION["r4"] = "Question 4: Correct !";
  $_SESSION["r4style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r4"] = "Question 4: Faux, la bonne réponse était Nissan Skyline.<br>";
  $_SESSION["r4style"] = "wrong";
}

//Teste la Q5
if (isset($_GET["q5r2"]) && isset($_GET["q5r3"])) {
  //Si la réponse est correcte
  $_SESSION["r5"] = "Question 5: Correct !";
  $_SESSION["r5style"] = "right";
  $score += 2;
} else {

  //Si la réponse est fausse
  $_SESSION["r5"] = "Question 5: Faux, la bonne réponse était Ja Rule et Ludacris.<br>";
  $_SESSION["r5style"] = "wrong";
}

//Teste la Q6
if ($_GET["q6"] == "Bresil") {
  //Si la réponse est correcte
  $_SESSION["r6"] = "Question 6: Correct !";
  $_SESSION["r6style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r6"] = "Question 6: Faux, THIS IS BRAZILLLL !§§!<br>";
  $_SESSION["r6style"] = "wrong";
}

//Teste la Q7
if ($_GET["q7"] == "Sous-marin nucleaire") {
  //Si la réponse est correcte
  $_SESSION["r7"] = "Question 7: Correct !";
  $_SESSION["r7style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r7"] = "Question 7: Faux, il s'agit d'un sous-marin nucleaire, narmol.<br>";
  $_SESSION["r7style"] = "wrong";
}

//Teste la Q8
if (isset($_GET["q8r1"]) && isset($_GET["q5r3"]) && isset($_GET["q8r4"])) {
  //Si la réponse est correcte
  $_SESSION["r8"] = "Question 8: Correct !";
  $_SESSION["r8style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r8"] = "Question 8: Faux, la bonne réponse était Brian, Mia et Roman.<br>";
  $_SESSION["r8style"] = "wrong";
}

//Teste la Q9
if ($_GET["q9"] == "3") {
  //Si la réponse est correcte
  $_SESSION["r9"] = "Question 9: Correct !";
  $_SESSION["r9style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r9"] = "Question 2: Faux, la bonne réponse était 3.<br>";
  $_SESSION["r9style"] = "wrong";
}

//Teste la Q10
if ($_GET["q10"] == "ff3") {
  //Si la réponse est correcte
  $_SESSION["r10"] = "Question 10: Correct !";
  $_SESSION["r10style"] = "right";
  $score += 2;
} else {
  //Si la réponse est fausse
  $_SESSION["r10"] = "Tu n'as pas répondu Fast and Furious: Tokyo Drift, tu viens donc de perdre 2 points.<br>";
  $_SESSION["r10style"] = "wrong";
  $score -= 2;
}

//Score
$_SESSION["score"] = $score;

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

//Renvoi le resultat sur la page du questionnaire
header('Location: ./index.php');
