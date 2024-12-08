<?php
function randomString(int $len){
    $p = '1234567890qwertyuiopasdfghjkl';
    $s = '';
    $n = strlen($p) - 1;
    for($i=0; $i < $n; $i++){
        $s .= $p[random_int(0, $n)];

    }
    return $s;
}