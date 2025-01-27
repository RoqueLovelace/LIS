<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos Personales</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">Datos Personales</h1>
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Campo</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <?php
                $nombreCompleto = "Chris Anthony Cortez Alvarez";
                $lugarNacimiento = "San Salvador, El Salvador";
                $edad = 20;
                $carnet = "CA220787";

                echo "<tr><td>Nombre Completo</td><td>$nombreCompleto</td></tr>";
                echo "<tr><td>Lugar de Nacimiento</td><td>$lugarNacimiento</td></tr>";
                echo "<tr><td>Edad</td><td>$edad</td></tr>";
                echo "<tr><td>Carnet Universitario</td><td>$carnet</td></tr>";
                ?>
      </tbody>
    </table>
  </div>
</body>

</html>