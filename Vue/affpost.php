<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
for ($id=1;$id<=4;$id++){
    $postes = $model->getPostes($id);
    $postes=$postes->getTitres();
    array_push($post,$postes);
    }
$arrlength = count($post);

for($x = 0; $x < $arrlength; $x++) {
    echo $post[$x];
    echo "<br>";
}
?>    
      