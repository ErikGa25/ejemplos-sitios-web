<?php
// se pueden definir con define(), no se pueden modificar
define('FRUTAS', ['Manzana', 'Pera', 'Uvas', 'Sandia']);

print '<pre>';
var_dump(FRUTAS);
print '</pre>';

print FRUTAS[1];

// FRUTAS[1] = 'Zanahoria'; error