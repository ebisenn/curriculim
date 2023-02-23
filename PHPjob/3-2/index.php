<?php
$fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];

function getprice($unit,$num){
    $price=$unit*$num;
    return $price;
}

foreach($fruits as $key => $value){
    echo $key."は".getprice($value,1)."円です。";
    echo '<br>';
}

?>