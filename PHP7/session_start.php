<?php
// acepta un array de opciones que sobreescriben las directivas de configuracion de sesiones establecidas normalmente en php.ini
session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);