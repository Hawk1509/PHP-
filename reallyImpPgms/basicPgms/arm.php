<?php
$number = 153;
$res = 0;
$temp = $number;
while($temp != 0){
    $a = $temp%10;
    $res = $res+($a*$a*$a);
    $temp = (int)($temp/10);
}
if($number == $res){
    echo "$number is armstrong";
}
else{
    echo "$number is not armstrong";
}
?>