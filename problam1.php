<?php
$array1= [1,3,6,2,4];
$array2= [2,0,4,1,2];
$array3= [];

echo "array1 =="; print_r($array1);echo'<br>';
echo "array1 =="; print_r($array2);echo'<br>';
  for ($i=0; $i <count($array1) ; $i++) { 
     $array3[$i] = $array1[$i] + $array2[$i];
  }

  $array3 = array_unique($array3);
print_r($array3);




?>