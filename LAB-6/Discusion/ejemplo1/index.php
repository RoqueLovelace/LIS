<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Venta de autos</title>
</head>

<body>
  <div class="container">
    <header>
      <h1>Autos disponibles</h1>
    </header>
    <form method="POST">
      <label for="marca">Selecciona una marca:</label>
      <select name="marca" id="marca" class="form-control" onchange="this.form.submit()">
        <option value="">-- Todas las marcas --</option>
        <option value="Peugeot">Peugeot</option>
        <option value="Renault">Renault</option>
        <option value="BMW">BMW</option>
        <option value="Toyota">Toyota</option>
      </select>
    </form>
    <div class="row">
      <?php
      spl_autoload_register(function ($class) {
        if (is_file("class/{$class}.class.php")) {
          include_once("class/{$class}.class.php");
        } else {
          die("class/{$class}.class.php No existe en el proyecto");
        }
      });

      $movil[0] = new auto("Peugeot", "307", "Gris", "img/peugeot.jpg");
      $movil[1] = new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg");
      $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
      $movil[3] = new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg");
      $movil[4] = new auto();

      $marcaSeleccionada = $_POST['marca'] ?? '';

      foreach ($movil as $auto) {
        if ($marcaSeleccionada == '' || $auto->getMarca() == $marcaSeleccionada) {
          $auto->mostrar();
        }
      } ?>
    </div>
  </div>
</body>

</html>