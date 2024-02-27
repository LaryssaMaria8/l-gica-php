<?php
function verificaSimetria($matriz){
$linhas = count($matriz);
$colunas = count($matriz[0]);

for ($i = 0; $i < $linhas; $i++){
    for ($j = 0; $j < $colunas; $j++){
        if($matriz[$i] [ $j] != $matriz[$j][ $i] ) {
            return false;
}
}
}
return true;
}
$matriz = array(
    array(2,4,6),
    array(1,3,5),
    array(7,8,9)
);
if(verificaSimetria($matriz)){
    echo"A matriz é simétrica";
}else{
    echo"A matriz não é simétrica";
}

?>