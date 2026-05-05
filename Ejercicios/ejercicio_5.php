<?php
function calcularPotenciasYRaiz($numero) {
    return [
        "cuadrado" => $numero ** 2,
        "cubo" => $numero ** 3,
        "raiz" => sqrt($numero)
    ];
}

$resultado = calcularPotenciasYRaiz(9);
echo "Cuadrado: " . $resultado['cuadrado'] . ", ";
echo "Cubo: " . $resultado['cubo'] . ", ";
echo "Raíz: " . $resultado['raiz'];
?>
