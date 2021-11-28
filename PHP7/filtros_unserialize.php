<?php
class Objeto1 {
    public $valor1;
}

class Objeto2 {
    public $valor2;
}

$obj1 = new Objeto1();
$obj1->valor1 = 'gato';

$obj2 = new Objeto2();
$obj2->valor2 = 'perro';

$obj1Serializado = serialize($obj1);
$obj2Serializado = serialize($obj2);

//deserializado
// allowed_classes => true acepta todas las clases
$data = unserialize($obj1Serializado, ["allowed_classes" => true]);
var_dump($data);

print '<hr/>';

// allowed_classes => false no acepta todas las clases
$data = unserialize($obj1Serializado, ["allowed_classes" => false]);
var_dump($data);

print '<hr/>';

// allowed_classes => [] (lista blanca)
$data = unserialize($obj1Serializado, ["allowed_classes" => ["Objeto2"]]);
var_dump($data);

print '<hr/>';

// allowed_classes => [] (lista blanca)
$data = unserialize($obj2Serializado, ["allowed_classes" => ["Objeto2"]]);
var_dump($data);