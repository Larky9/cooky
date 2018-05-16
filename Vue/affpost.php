<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
    $row = $model->getRow();
    for ($id=1;$id<=$row;$id++){
        $postes = $model->getPostes($id);
        $postes=$postes->getTitres();
        array_push($post,$postes);
    }
 
$arrlength = count($post);

?> 