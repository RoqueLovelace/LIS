<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de Unidades</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Conversor de Unidades</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="post" action="">
          <div class="mb-3">
            <label for="valor" class="form-label">Valor a convertir:</label>
            <input type="number" step="any" class="form-control" id="valor" name="valor" required>
          </div>
          <div class="mb-3">
            <label for="deUnidad" class="form-label">De:</label>
            <select class="form-select" id="deUnidad" name="deUnidad" required>
              <option value="metros">Metros</option>
              <option value="yardas">Yardas</option>
              <option value="pies">Pies</option>
              <option value="varas">Varas</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="aUnidad" class="form-label">A:</label>
            <select class="form-select" id="aUnidad" name="aUnidad" required>
              <option value="metros">Metros</option>
              <option value="yardas">Yardas</option>
              <option value="pies">Pies</option>
              <option value="varas">Varas</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary w-100">Convertir</button>
        </form>

        <?php
        // Definimos las conversiones
        $conversiones = [
          'metros' => [
            'yardas' => 1.09361,
            'pies' => 3.28084,
            'varas' => 1.1963,
          ],
          'yardas' => [
            'metros' => 0.9144,
            'pies' => 3,
            'varas' => 1.09361,
          ],
          'pies' => [
            'metros' => 0.3048,
            'yardas' => 0.333333,
            'varas' => 0.364537,
          ],
          'varas' => [
            'metros' => 0.8359,
            'yardas' => 0.9144,
            'pies' => 2.742,
          ],
        ];

        // Procesamos el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $valor = $_POST['valor'];
          $deUnidad = $_POST['deUnidad'];
          $aUnidad = $_POST['aUnidad'];

          if ($deUnidad === $aUnidad) {
            $resultado = $valor; // Si las unidades son iguales, no hay conversión
          } else {
            $factor = $conversiones[$deUnidad][$aUnidad];
            $resultado = $valor * $factor;
          }

          echo "<div class='alert alert-success mt-4'>";
          echo "<strong>Resultado:</strong> $valor $deUnidad = $resultado $aUnidad";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>