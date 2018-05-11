<?php 
    include "model/post.php";
    include "model/model.php";
   
    $model = new Model();
    $post=array();
    $id=$model->getRow();
    echo "$id";
while ($postes!=null){
    $postes = $model->getPostes($id);
    $postes=$postes->getTitres();
    array_push($post,$postes);
    $id=$id+1;
}
$arrlength = count($post);

for($x = 0; $x < $arrlength; $x++) {
    echo $post[$x];
    echo "<br>";
}
?>    
      