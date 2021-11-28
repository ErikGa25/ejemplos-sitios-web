<?php
// 
// generadores delegados
function gen() {
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2() {
    yield 3;
    yield 4;
}

foreach (gen() as $value) {
    print $value."<br>";
}

print '<hr/>';

function americaNorte() {
    yield "Canadá";
    yield "México";
}

function americaCentral() {
    yield "Costa Rica";
    yield "Honduras";
}

function americaSur() {
    yield "Colombia";
    yield "Venezuela";
}

function capitalesAmerica() {
    yield from americaNorte();
    yield from americaCentral();
    yield from americaSur();
}

foreach (capitalesAmerica() as $value) {
    print $value."<br>";
}