<?php
// el valor predeterminado debe ser una expresión constante, no una variable, un miembro de una clase o una llama a una función
function pastel($costo, $sabor = array('limón')) {
    return "<p>Esto es un pastel sabor " . join(',', $sabor) . " con un costo de $" . $costo . "</p>";
}

$sabores = array('fresa', 'chocolate');

print pastel(100, $sabores);
print pastel(200);