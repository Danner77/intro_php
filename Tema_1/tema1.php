
<?php
// Esto es un comentario de una linea
# Esto tambien es un comentario

/*
Este es un bloque
de multiples lineas
*/
?>


<?php
$nombre = "Juan";
$edad = 20;

echo $nombre; // Imprime: Juan
?>

<?php
define("PI", 3.146);
const SALUDO = "Hola";
echo PI; // Imprime: 3.1416
?>


<?php
$frutas = ["Manzana", "Banano", "Uva"]

echo $frutas[0]; // Imprime: Manzana
echo $frutas[2]; // Imprime: Uva

?>


<?php
$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Bogotá"
];

echo $persona["nombre"]; // Imprime: Ana
?>