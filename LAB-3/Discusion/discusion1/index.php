<?php
$estudiantes = [
  "Chris Anthony Cortez Alvarez" => [
    "tarea" => 8.5,
    "investigacion" => 9.0,
    "examen_parcial" => 7.8
  ],
  "Ariana Nicole Quintanilla Martinez" => [
    "tarea" => 10,
    "investigacion" => 10,
    "examen_parcial" => 10
  ],
  "David Eduardo Gálvez" => [
    "tarea" => 6.8,
    "investigacion" => 3.3,
    "examen_parcial" => 7.0
  ]
];

function calcularPromedio($notas)
{
  $tarea = $notas['tarea'] * 0.50;
  $investigacion = $notas['investigacion'] * 0.30;
  $examen_parcial = $notas['examen_parcial'] * 0.20;
  return $tarea + $investigacion + $examen_parcial;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promedio de Estudiantes Estrellas Salesianos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Promedio de Estudiantes Estrellas Salesianos</h1>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>Nombre</th>
          <th>Tarea (50%)</th>
          <th>Investigación (30%)</th>
          <th>Examen Parcial (20%)</th>
          <th>Promedio</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($estudiantes as $nombre => $notas): ?>
          <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $notas['tarea']; ?></td>
            <td><?php echo $notas['investigacion']; ?></td>
            <td><?php echo $notas['examen_parcial']; ?></td>
            <td><?php echo number_format(calcularPromedio($notas), 2); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>