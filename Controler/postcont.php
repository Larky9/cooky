<?php
$titres = $_POST['titres'];
$recettes = $_POST['recettes'];
$ingredients = $_POST['ingredients'];

include "Model/post.php";
include "Model/model.php";
$model= new Model();
$createdPost= new Post($titres,$recettes,$ingredients);

$postes = $model->getPostesByTitres($createdPostes->getTitres());
?>

