<?php
$fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];
$num = ["1","1","1"];

function getprice($unit,$num){
    $price=$unit*$num;
    return $price;
}

$i=0;
foreach($fruits as $key => $value){
    echo $key."は".getprice($value,$num[$i])."円です。";
    echo '<br>';
    $i++;
}

?>