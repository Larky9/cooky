<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
    $row = $model->getRow();
    for ($id=0;$id<=$row;$id++){
        $postes = $model->getPostes($id);
        if($postes==null){
            break;
        }else{
        array_push($post,$postes);
        $titres =$post[$id]->getTitres();
        $rec =$post[$id]->getRecettes();
        $ing =$post[$id]->getIngredients();
        echo "<br>$titres<br>$rec<br>$ing<br>";
    }
    }
 
$arrlength = count($post);

?> 