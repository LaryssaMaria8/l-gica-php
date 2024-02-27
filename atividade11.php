<?php
function verificaPalindromo($palavra){
    $reverso = strrev($palavra);

if($palavra == $reverso){
    echo "$palavra é um palindromo";
}else{
    echo"$palavra não é um palindromo";
}
}
verificaPalindromo("bola");

?>
