<?php
    include "model/post.php";
    include "model/model.php";
    
    $model = new Model();
    $postes = $model->getPostes(); 
    $postes=$postes->getTitres();
    echo "$postes <br>";
    
?>    
      