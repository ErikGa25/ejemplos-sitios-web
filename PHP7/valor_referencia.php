<?php
// cuando pasamos un valor por referencia podemos modificar el valor original del argumento
function saludo(&$nombre) {
    $nombre .= ', buenos dias';
}

$nombre = 'Pedro Picapiedra';
saludo($nombre);
print $nombre . '<br>';

//
$fruta = array('manzana', 'pera');
function frutas(&$f) {
    array_push($f, "uvas");
}
frutas($fruta);
var_dump($fruta);