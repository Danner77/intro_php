<?php
$minutos = 5; 
if ($minutos <= 3) {
    $total = 300;
} else {
    $total = 300 + (($minutos + 3) * 50);
}
echo "El total a pagar es: $" . $total;
?>

