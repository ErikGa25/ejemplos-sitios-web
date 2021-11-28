<?php
function suma($simbolo, int ...$numeros) {
    $total = 0;
    foreach($numeros as $num) {
        $total += $num;
    }

    return $simbolo.$total;
}

echo suma('$', 2, 10, 23, 70);