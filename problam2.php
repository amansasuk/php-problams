<?php

$mixFruits= ["grapes","banana","cabbage","tomato"];

filterFruits($mixFruits);

function filterFruits ($mixFruits)
{
    $fruitsarr = [];

    $fruitsDB= ["apple","banana","orange","pineapple","grapes","avacdo","strawberry"];

    foreach($fruitsDB as $fruits){
        foreach($mixFruits as $mix){
            if($fruits == $mix ){
                $fruitsarr[] = $fruits;   
            }  
        }
        
    }
    print_r($fruitsarr);
    return $fruitsarr;
    
    // return $fruitsDB;
    
}




?>