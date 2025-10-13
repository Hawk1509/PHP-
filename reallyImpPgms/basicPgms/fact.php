<?php
function fact($num){
    $fact = 1;
    for($i=1;$i<=$num;$i++){
        $fact*=$i;
    }
    return $fact;
}
$num = 5;
$f = fact($num);
print "factorial of $num is: $f";