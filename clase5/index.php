<?php
//actividad 1
//ejercicio 1
echo "ejercio 1: Mostrar los números del 1 al 9"."<br>";

$num = 1;

while (($num <= 9)) {
echo "este es el numero: $num"."<br>";
  // se le va sumando en cada vuelta
  // num = num + 1
$num++;
}
echo "ejercio 2: Mostrar los números del 9 al 1"."<br>";
//ejercio 2

$num = 9;


while ($num >= 1) {
echo "este es el numero: $num"."<br>";

   // se le va restando en cada vuelta
// num = num - 1

$num--;
}

echo "ejercio 3: Mostrar los números pares del 1 al 20"."<br>";

// Ejercicio 3

$num = 1;

while ($num <= 20) {
if ($num % 2 == 0) {
    echo "este es el numero: $num"."<br>";
}
// num = num + 1
$num++;
}
echo "ejercio 4: Mostrar los números impares del 1 al 20"."<br>";


// Ejercicio 4

$num = 1;

while ($num <= 20) {
if ($num % 2 != 0) {
    echo "este es el numero: $num"."<br>";
}
// num = num + 1
$num++;
}

echo "ejercio 5: Mostrar la suma de los números del 1 al 20"."<br>";

// Ejercicio 5

$suma = 0;
$num = 1;

while ($num <= 20) {
// suma = suma + num
$suma += $num;
// num = num + 1
$num++;
}

echo "La suma de los números del 1 al 20 es: $suma"."<br>" ;


echo "ejercio 6: Mostrar la suma de los números pares del 1 al 20"."<br>";

// Ejercicio 6


$suma = 0;
$num = 2;

while ($num <= 20) {
// suma = suma + num
$suma += $num;
// num = num + 2
$num += 2;
}

echo "La suma de los números pares del 1 al 20 es: $suma";

?>
