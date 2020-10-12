<?php

$val1=["red","blue","black","grey","green"]; //manual aray

$val2=["one"=>"this is post one",
    "two"=>"this is post two",
    "three"=>"this is post three",
    "four"=>"this is post four"]; //Associative array

$val3=[
    ["name"=>"Aung Aung", "age"=>"20"],
    ["name"=>"Maung Maung", "age"=>"30"],
    ["name"=>"Mya Mya", "age"=>"20"],
    ["name"=>"Hla Hla", "age"=>"10"],
]; //Multidimendional array

var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);

echo "<hr/>";

echo $val1[0]; //manual array 

echo "<hr/>";

echo $val2["two"];

echo "<hr/>";

echo $val3[2]["name"];

echo "<hr/>";

foreach($val1 as $data){
    echo $data. "<br/>";
}
echo "<hr/>";
echo "Ass Array"."<br/>;
foreach($val2 as $key=>$val){
    echo $key. \"<br/>";
    echo $value. "<br/>";



echo "<hr/>";
foreach($val3 as $multi){
    foreach($multi as $single){
        echo $b. "<br/>";
    }
}


?>