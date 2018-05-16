<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
    $row = $model->getRow();
    for ($id=0;$id<=$row;$id++){
        $postes = $model->getPostes($id);

        array_push($post,$postes);
    }
 
$arrlength = count($post);

?> 