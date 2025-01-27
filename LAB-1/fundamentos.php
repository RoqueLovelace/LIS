<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hola mundo</title>
</head>
<body>
  <?php
    echo "HOLA FOKIN WORLD";

    $miVariable = "Hola mundo (desde una variable)";

    echo $miVariable . "<br>";

    $a = "Hola";
    $b = "Mundo";

    echo "$a$b <br>";


    $name = 'Chris';
    echo 'Mi nombre es '. $name . '<br> BALBLALBLAS';


    // coercion de tipos
    $numero=5;
    $numero2='5';

    var_dump(value: $numero == $numero2);
    var_dump(value: $numero === $numero2);

    // casting explicito
    $numero3 = (int) $numero2;
    var_dump(value: $numero3=== $numero);
  ?>
</body>
</html>