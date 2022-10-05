<?php
$arr = [16, 17, 4, 3, 5, 2];
print_r($arr);
$ar=[];
for ($i=0; $i <count($arr) ; $i++) { 
    echo "<br>";
    // print_r($arr[$i]);
    for ($j = $i + 1; $j < count($arr); $j++){
            if ($arr[$i] <$arr[$j]){
                $ar[]= $arr[$j];
            }
                break;
        } 

        if ($j == count($arr)){
            $ar[]=$arr[$i];    
    }
}

print_r($ar);


?>