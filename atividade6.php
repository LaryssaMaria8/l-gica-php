<?php
$notas = array("8","3","4","6","2","7",) ;
$total = count( $notas );
$sum = array_sum($notas );
$media = $sum/$total;
echo "A média é: $media";
?>