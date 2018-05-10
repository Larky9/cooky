<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
for ($id=1;$id<=4;$id++){
    $postes = $model->getPostes($id);
    $postes=$postes->getTitres();
    echo "$postes <br>";
    }
?>    
      