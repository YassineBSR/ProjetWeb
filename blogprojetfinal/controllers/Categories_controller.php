<?php 

$categories = readAllCategories();
function readAllCategories(){
    $categories = new Categories();
    return $categories->readCategories();

    }

    
   

