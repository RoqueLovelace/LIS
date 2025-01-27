<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversión de Dólares a Euros</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">Conversión de Dólares a Euros</h1>
    <form method="POST" action="">
      <div class="form-group">
        <label for="dolares">Cantidad en Dólares:</label>
        <input type="number" step="0.01" class="form-control" id="dolares" name="dolares" required>
      </div>
      <button type="submit" class="btn btn-primary">Convertir</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dolares = $_POST['dolares'];
            $tasaCambio = 0.96; // 1 dólar = 0.96 euros a esta fecha
            $euros = $dolares * $tasaCambio;

            $eurosFormateados = number_format($euros, 2, '.', '');

            echo "<h2 class='mt-4'>Resultado de la Conversión</h2>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='thead-dark'><tr><th>Dólares</th><th>Euros</th></tr></thead>";
            echo "<tbody><tr><td>$dolares USD</td><td>$eurosFormateados EUR</td></tr></tbody>";
            echo "</table>";
        }
        ?>
  </div>
</body>

</html>