<?php
$titres = $_POST['titres'];
$recettes = $_POST['recettes'];
$ingredients = $_POST['ingredients'];

include "Model/post.php";
include "Model/model.php";
$model= new Model();
$createdPostes= new Post($titres,$recettes,$ingredients);
$model->createPoste($createdPostes);
header ("Location: index.php?page=recette");
?>

