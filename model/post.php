<?php

class Post
{
    public $titre;
    public $recettes;
    public $ingredients;
    public $id;
    

    function __construct($titres,$recettes,$ingredients)
    {
        $this->titres=$titres;
        $this->recettes=$recettes;
        $this->ingredients=$ingredients;
    }

    function getTitres(){
        return $this->titres;
    }
    function getRecettes(){
        return $this->recettes;
    }
    function getIngredients(){
        return $this->ingredients;
    }
  
}

?>