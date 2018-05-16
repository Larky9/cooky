<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();

    for ($id=2;$id<=6;$id++){
        $postes = $model->getPostes($id);
        $postes=$postes->getTitres();
        array_push($post,$postes);
    }
 
$arrlength = count($post);

?> 