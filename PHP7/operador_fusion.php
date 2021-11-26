<?php
// es equivalente al operador ternario junto con la función isset
// devuelve su primer operando si existe y no es NULL, de lo contrario devuelve su segundo operando
$usuario = $_GET["usuario"] ?? $_POST["usuario"] ?? "<strong>Anonimo</strong>";
print($usuario);