<?php
function calcularDistanciaEntrePuntos($x0, $y0, $x1 = 0, $y1 = 0)
{
  return round(sqrt(pow($x1 - $x0, 2) + pow($y1 - $y0, 2)), 2);
}

function calcularPromedio(...$numeros)
{
  $n = count($numeros);
  if ($n == 0) {
    return 0;
  }

  $suma = array_sum($numeros);
  return $suma / $n;
}

function calcularMediaVarianza(...$numeros)
{
  $n = count($numeros);

  if ($n == 0)
    return 0;

  $sum = array_sum($numeros);

  $promedio = $sum / $n;
  $sumNumerador = 0;

  foreach ($numeros as $num) {
    $sumNumerador += pow($num - $promedio, 2);
  }

  $varianza = $sumNumerador / $n;

  return [$promedio, $varianza];


}

function factorialRecursivo($n)
{
  if ($n == 0) {
    return 1;
  }
  return $n * factorialRecursivo($n - 1);
}

echo "La distancia del punto (3,5) al origen es: " . calcularDistanciaEntrePuntos(3, 5);
echo "<br> La distancia del punto (3,5) al origen es: " . calcularDistanciaEntrePuntos(3, 5, 1, 1);
echo "<br> El promedio de 1,2,3,4,5 es: " . calcularPromedio(1, 2, 3, 4, 5);

$resultados = calcularMediaVarianza(10, 12, 14, 16, 18);

echo "<br> El promedio de 10,12,14,16,18 es: " . $resultados[0];
echo "<br> La varianza de 10,12,14,16,18 es: " . $resultados[1];

echo "<br> El factorial de 5 es: " . factorialRecursivo(170);
