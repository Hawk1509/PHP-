<?php
function isPrime($number){
    if ($number <= 1){
        return false;
    }
    for ($i=2;$i<sqrt($number);$i++){
        if ($i%$number==0){
            return false;
        } 
    }
    return true;
}
$number = 29;
if(isPrime($number))
    echo "Prime";
else echo "not";