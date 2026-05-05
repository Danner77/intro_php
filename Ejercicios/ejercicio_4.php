<?php
$inicio = 10;
$fin = 50;
$pares = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) {
        $pares++;
    }
}
echo "Hay " . $pares . " números pares.";
?>