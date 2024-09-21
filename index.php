<?php

echo 'PHP 9/21/2024 Practice' ."<br>";

$num = 1;
$defaultNumValue = 10;
$defaultStringValue = 'NULL String';
$nLine = "<br>";
echo $defaultStringValue .$nLine;
echo $nLine;

echo 'Function and Arrays' .$nLine;

$defaultArray = [1, 2, 3, 4];

function arrayData($arr1, $arr2, $arr3){
    return $arrays = [$arr1, $arr2, $arr3];
    
};
foreach(arrayData(1, 2, 3) as $arr){
    echo $arr ."<br>";
}

function checkArray($count){
    echo $count == 3 ? 'Array Valid Count' : 'Array Not Valid' ;

}

checkArray(4);

//testing for chnages commit
$hellows  = 1;
?>