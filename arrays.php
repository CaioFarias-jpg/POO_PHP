<?php
function teste(int $num){
    if($num > 0 ){
        return["MAIOR QUE 0", true];
    }else{
        return["MENOR QUE 0", false];
    }
}

$arr = array("BANANA", "MAÇÃ", "PERA", "UVA","MAMÃO");
$x = 10;

echo count($arr);
echo '<br>';
print_r($arr);
echo '<br>';

echo $arr[2];
echo '<br>';

$result = teste($x);

echo gettype($result);
echo '<br>';
echo $result[0];
?>