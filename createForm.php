<?php

// Crée une div jumbotron avec une image, un titre et un sous-titre
function createJumbotron($img, $title, $subtitle)
{
  return "<div class='mt-3 container jumbotron'><div class='row'><div class='col-6'><img class='rounded img-fluid' src='" . $img . "'></div><div class='col-6'><h1 class='display-3'>" . $title . "</h1><hr><p class='lead'>" . $subtitle . "</p></div></div></div>";
}

// Crée un heading pour chaque question avec un badge et le nom de la question
function createQuestion($numQuestion, $question)
{
  $html = "<h4><span class='badge badge-dark'>Question " . $numQuestion . "</span> " . $question . "</h4>";
  $html .= "<div class='d-flex justify-content-between form-group mt-3 mb-5'>";
  return $html;
}

// Crée un closing tag
function closeTag($tag)
{
  return "</" . $tag . ">";
}

// Crée un bloc input pour le type radio et checkbox
function createInput($type, $id, $name, $value)
{
  $html = "<label class='form-check-label' for='" . $id . "'>";
  $html .= "<input class='form-check-input' type='" . $type . "' id='" . $id . "' name='" . $name . "' value='" . $value . "'>" . $value . "</label>";
  return $html;
}

// Crée un bloc input pour le type number et text
function createInputTyping($type, $name)
{
  return "<input class='form-control' type='" . $type . "' name='" . $name . "' placeholder='Reponse' required>";
}

// Crée un bloc select
function createSelect($name, $options)
{
  $html =  "<select class='form-control custom-select' name='" . $name . "'>";
  foreach ($options as $key => $value)
  {
    $html .= "<option value='" . $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";
  return $html;
}

// Crée un bouton de submit
function createSubmit ($value)
{
  return "<input class='mb-3 btn btn-danger' type='submit' value='" . $value . "'>";
}
