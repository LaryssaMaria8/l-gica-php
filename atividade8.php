<?php
function calcularAreaDoCiruclulo($raio){
    return pi() * $raio * $raio;
}
$raio = 8;
echo"A área do circulo é: " . calcularAreaDoCiruclulo($raio);
?>