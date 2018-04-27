<?php
$titres = $_POST['titres'];
$recettes = $_POST['recettes'];
$ingredients = $_POST['ingredients'];

include "Model/post.php";
include "Model/model.php";
$model= new Model();
$id= /* je sais plus comment faire ca..*/
$createdPost= new Post($titres,$recettes,$ingredients,$id);



