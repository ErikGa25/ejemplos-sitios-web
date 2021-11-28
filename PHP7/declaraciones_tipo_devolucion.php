<?php
// tipificacion debil, los valores seran devueltos forzados al tipo correcto si no son ya de ese tipo
// tipificacion fuerte, el valor devuelto debe ser del tipo correcto, sino se lanza un error
declare(strict_types=1); // para mostrar un error fatal

function suma($n1, $n2):int {
    return $n1 + $n2;
}

var_dump(suma(10, 5));

function resta($n1, $n2):float {
    return $n1 - $n2;
}

var_dump(resta(10.6, 5.1));


class Gato{};
class Perro{};

function regresaGato():Gato {
    return new Gato;
}

var_dump(regresaGato());