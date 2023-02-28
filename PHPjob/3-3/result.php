<?php
$num = $_GET['num'];

$str=strlen($num);
$n=mt_rand(0,$str-1);
$get=substr($num,$n,1);

echo date("Y/m/d",time())."の運勢は<br>";
echo "選ばれた数字は".$get.'<br>';

if($get==0){
    echo "凶";   
}elseif($get>=1 && $get<=3){
    echo "小吉";
}elseif($get>=4 && $get<=6){
    echo "中吉";
}elseif($get>=7 && $get<=8){
    echo "吉";
}elseif($get==9){
    echo "大吉";
}

?>