<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
    $row = $model->getRow2();
    echo $row;
    for ($id=0;$id<=$row;$id++){
        $postes = $model->getPostes($id);
        if($postes==null){
            echo 'null';
        }else{
        array_push($post,$postes);
        $titres =$post[$id]->getTitres();
        $rec =$post[$id]->getRecettes();
        $ing =$post[$id]->getIngredients();
        echo "<br>$titres<br>$rec<br>$ing<br>$id<br>";
    }
    }
 
$arrlength = count($post);

?> 