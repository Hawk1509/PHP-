<?php
$stud = array(
    "1"=>"A",
    "2"=>"B",
    "3"=>"C",
    "4"=>"D",
    "5"=>"E",
    "6"=>"F",
    "7"=>"G",
    "8"=>"H",
    "9"=>"I",
    "10"=>"J",
);
$assort=$stud;
asort($assort);
foreach($assort as $roll=>$name){
    echo "Roll: $roll Name: $name \n";
}
echo "\n\n now using arsort\n\ns";
$arssort = $stud;
arsort($arssort);
foreach($arssort as $roll=>$name){
    echo "Roll: $roll Name: $name\n";
}