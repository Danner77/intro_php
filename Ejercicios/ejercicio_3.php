<?php
$dias = [
    "l" => "Lunes", "m" => "Martes", "mi" => "Miércoles",
    "j" => "Jueves", "v" => "Viernes", "s" => "Sábado", "d" => "Domingo"
];

$claves = array_keys($dias); 

for ($i = 0; $i < count($claves); $i++) {
    $nombreDia = $dias[$claves[$i]];
    echo substr($nombreDia, 0, 2) . " "; 
}
?>