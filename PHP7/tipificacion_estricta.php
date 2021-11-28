<?php
// solamente sera aceptada una variable del tipo exacto de la declaración del tipo
declare(strict_types=1); // para mostrar un error fatal

function suma(int $n1, int $n2):int {
    return $n1 + $n2;
}

try {
    var_dump(suma(10, 4));
    var_dump(suma(10.2, 4.6));
} catch (TypeError $e) {
    print "<p>Error: " . $e->getMessage() . "</p>";
}