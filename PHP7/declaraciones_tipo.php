<?php
declare(strict_types=1); // para mostrar un error fatal
// las declaraciones de tipo permiten alas funciones requerir que los parámetros sean de cierto tipo durante una llamada
function hola(bool $nombre) {
    print 'Hola ' . join(', ', $nombre) ;
}

//hola(123123);
hola(true);