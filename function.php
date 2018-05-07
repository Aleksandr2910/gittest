<?php

$c = '1';
$d = '20';

function summa($a, $b){

    return $b - $a;
}
echo summa(1, 3)." - со значениями<br>";
function test(){
    global $d, $c;
    return $d = $d - $c;
}

test();
echo $d," - global<br>";

function text(){
    echo "как то так";
}
text();

?>
