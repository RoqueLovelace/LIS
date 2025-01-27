<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesar PHP</title>

  <link rel="stylesheet" href="bootstrap.min.css"s>
</head>
<body>
  <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['message'];
  ?>

  <div class="container mt-5">
    <div class="row">
      <table class="table table-bordered">
       <tr>
        <td>Nombre</td>
        <td><?php echo htmlspecialchars($nombre); ?></td>
       </tr>
       <tr>
        <td>Apellido</td>
        <td><?php echo htmlspecialchars($apellido); ?></td>
       </tr>
       <tr>
        <td>Correo</td>
        <td><?php echo htmlspecialchars($correo); ?></td>
       </tr>
       <tr>
        <td>Motivo</td>
        <td><?php echo htmlspecialchars($motivo); ?></td>
       </tr>
       <tr>
        <td>Mensaje</td>
        <td><?php echo htmlspecialchars($mensaje); ?></td>
       </tr>
      </table>
    </div>
  </div>
</body>
</html>