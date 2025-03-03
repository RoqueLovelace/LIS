<?php
include 'validaciones.php';

if (isset($_POST)) {
  $errores = [];
  extract(array: $_POST);
  $nombres = $_POST['nombres'] ?? '';
  if (empty(trim($nombres))) {
    array_push($errores, 'El nombre no puede estar vacío');
  } else if (isText(var: trim($nombres))) {
    echo "El nombre es válido";
  } else {
    array_push($errores, 'El nombre ingresado no es valido');
  }
  $apellidos = $_POST['apellidos'] ?? '';
  if (empty(trim($apellidos))) {
    array_push($errores, 'El apellido no puede estar vacío');
  } else if (isText(var: trim($apellidos))) {
    echo "El apellido es válido";
  } else {
    array_push($errores, 'El apellido ingresado no es valido');
  }

  $carnet = $_POST['carnet'] ?? '';
  if (empty(trim($carnet))) {
    array_push($errores, 'El carnet no puede estar vacío');
  } else if (isCarnet(var: trim($carnet))) {
    echo "El carnet es válido";
  } else {
    array_push($errores, 'El carnet ingresado no es valido');
  }

  $telefono = $_POST['telefono'] ?? '';
  if (empty(trim($telefono))) {
    array_push($errores, 'El telefono no puede estar vacío');
  } else if (isPhone(var: trim($telefono))) {
    echo "El telefono es válido";
  } else {
    array_push($errores, 'El telefono ingresado no es valido');
  }

  $correo = $_POST['correo'] ?? '';
  if (empty(trim($correo))) {
    array_push($errores, 'El correo no puede estar vacío');
  } else if (isEmail(var: trim($correo))) {
    echo "El vcorreo es válido";
  } else {
    array_push($errores, 'El correo ingresado no es valido');
  }

  print_r($errores);
  if (empty($errores)) {
    echo "<h1>Usuario registrado exitosamente</h1>";
  } else {
    $_SESSION['errores'] = $errores;
    header(header: "Location:index.php");
  }
}