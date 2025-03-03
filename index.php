<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIS - Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: rgb(45, 28, 112);
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: bold;
    }

    .card {
      margin-top: 20px;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: rgb(45, 28, 112);
      color: #fff;
      font-weight: bold;
    }

    .btn-primary {
      background-color: rgb(45, 28, 112);
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .list-group-item {
      cursor: pointer;
    }

    .submenu {
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">LIS - Laboratorios</a>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            Bienvenido a los Ejercicios de LIS
          </div>
          <div class="card-body">
            <h5 class="card-title">Selecciona un Ejercicio</h5>
            <p class="card-text">Explora los ejercicios disponibles:</p>
            <div class="list-group">
              <!-- Guía 1 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#guia1">
                Guía 1
              </div>
              <div class="collapse submenu" id="guia1">
                <a href="LAB-1/Guia1/Ejercicio1/partehtmlphp.php" class="list-group-item list-group-item-action">
                  Ejercicio 1 - Parte HTML/PHP
                </a>
                <a href="LAB-1/Guia1/Ejercicio2/uso_variable.php" class="list-group-item list-group-item-action">
                  Ejercicio 2 - Uso de Variables
                </a>
                <a href="LAB-1/Guia1/Ejercicio3/opera_aritmeticos.php" class="list-group-item list-group-item-action">
                  Ejercicio 3 - Operaciones Aritméticas
                </a>
                <a href="LAB-1/Guia1/Ejercicio4/tiposdatos.php" class="list-group-item list-group-item-action">
                  Ejercicio 4 - Tipos de Datos
                </a>
                <a href="LAB-1/Guia1/Ejercicio5/ingresodatos.html" class="list-group-item list-group-item-action">
                  Ejercicio 5 - Ingreso de Datos
                </a>
              </div>

              <!-- Discusión Guía 1 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#discusion1">
                Discusión Guía 1
              </div>
              <div class="collapse submenu" id="discusion1">
                <a href="LAB-1/Discusion/Ejercicio2/DatosPersonales.php" class="list-group-item list-group-item-action">
                  Discusión - Ejercicio 2 - Datos Personales
                </a>
                <a href="LAB-1/Discusion/Ejercicio3/DolarEuro.php" class="list-group-item list-group-item-action">
                  Discusión - Ejercicio 3 - Conversión Dólar/Euro
                </a>
              </div>

              <!-- Guía 2 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#guia2">
                Guía 2
              </div>
              <div class="collapse submenu" id="guia2">
                <a href="LAB-2/Guia2/index.php" class="list-group-item list-group-item-action">
                  Ejercicio Clase
                </a>
              </div>

              <!-- Guía 3 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#guia3">
                Guía 3
              </div>
              <div class="collapse submenu" id="guia3">
                <a href="LAB-3/Guia/Ejercicio1/index.php" class="list-group-item list-group-item-action">
                  Ejercicio 1 - Página de Inicio
                </a>
                <a href="LAB-3/Guia/Ejercicio2/index.php" class="list-group-item list-group-item-action">
                  Ejercicio 2 - Formulario de Contacto
                </a>
                <a href="LAB-3/Guia/Ejercicio3/index.php" class="list-group-item list-group-item-action">
                  Ejercicio 3 - Lista de Productos
                </a>
                <a href="LAB-3/Guia/Ejercicio4/index.php" class="list-group-item list-group-item-action">
                  Ejercicio 4 - Sistema de Reservas
                </a>
              </div>

              <!-- Discusión Guía 3 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#discusion3">
                Discusión Guía 3
              </div>
              <div class="collapse submenu" id="discusion3">
                <a href="LAB-3/Discusion/discusion1/index.php" class="list-group-item list-group-item-action">
                  Discusión 1 - Página de Inicio
                </a>
              </div>

              <!-- Guía 4 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#guia4">
                Guía 4
              </div>
              <div class="collapse submenu" id="guia4">
                <a href="LAB-4/GUIA4/ejemplo1/moneda.php" class="list-group-item list-group-item-action">
                  Ejemplo 1 - Conversión de Moneda
                </a>
                <a href="LAB-4/GUIA4/ejemplo2/fibonacchi.php" class="list-group-item list-group-item-action">
                  Ejemplo 2 - Fibonacci
                </a>
                <a href="LAB-4/GUIA4/ejemplo3/elmayor.php" class="list-group-item list-group-item-action">
                  Ejemplo 3 - El Mayor de Tres Números
                </a>
                <a href="LAB-4/GUIA4/ejemplo4/destinos.php" class="list-group-item list-group-item-action">
                  Ejemplo 4 - Selección de Destinos
                </a>
              </div>

              <!-- Discusión Guía 4 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#discusion4">
                Discusión Guía 4
              </div>
              <div class="collapse submenu" id="discusion4">
                <a href="LAB-4/Discusion/discusion1/conversion.php" class="list-group-item list-group-item-action">
                  Discusión 1 - Conversión de Unidades
                </a>
              </div>
              <!-- Guía 6 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#guia6">
                Guía 6
              </div>
              <div class="collapse submenu" id="guia6">
                <a href="LAB-6/GUIA6/ejemplo1/index.php" class="list-group-item list-group-item-action">
                  Ejemplo 1 - Autos
                </a>
                <a href="LAB-6/GUIA6/ejemplo2/index.php" class="list-group-item list-group-item-action">
                  Ejemplo 2 - Cuenta de banco
                </a>
                <a href="LAB-6/GUIA6/ejemplo3/index.php" class="list-group-item list-group-item-action">
                  Ejemplo 3 - Empleado
                </a>
                <a href="LAB-6/GUIA6/ejemplo4/index.php" class="list-group-item list-group-item-action">
                  Ejemplo 4 - Coordenadas
                </a>
              </div>

              <!-- Discusión Guía 6 -->
              <div class="list-group-item" data-bs-toggle="collapse" href="#discusion6">
                Discusión Guía 6
              </div>
              <div class="collapse submenu" id="discusion6">
                <a href="LAB-6/Discusion/ejemplo1/index.php" class="list-group-item list-group-item-action">
                  Discusión 1 - Autos mod
                </a>
                <a href="LAB-6/Discusion/ejemplo3/index.php" class="list-group-item list-group-item-action">
                  Discusión 2 - Empleados mod
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>