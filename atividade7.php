<?php
$matriz = array(
array(6,9,7),
array(8,2,4),
array(3,5,1)
);
$transporta = array();
for ($i = 0; $i< 4; $i++){
    for ($j =0; $j <4; $j++){
        $transporta [$i][$j] = $matriz[$i][$j];
}
}
foreach ($transporta as $linha){
    echo implode("", $linha). "<br>";
}

?>