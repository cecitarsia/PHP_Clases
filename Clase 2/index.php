<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios</title>
  </head>
  <body>
    <?php
echo "<hr>";

      $var1 = 5;
      $var2 = 8;

      if ($var1 > $var2) {
        echo "El numero mayor es $var1.";
        } else {
          echo "El numero menor es $var2.";
      }

echo "<hr>";

      $numeroRandom = rand(1,5);

      if ($numeroRandom == 3 || $numeroRandom == 5) {
        echo $numeroRandom;
      }



echo "<hr>";

      $var1 = 5;

      if ($var1 != 3) {
        echo "El número NO es 3";
      } else {
        echo "3";
      }

echo "<hr>";
      $numRandom = rand(1,100);
      echo "El número es: $numRandom<br>";


      if ($numRandom > 50) {
        echo "El número es mayor a 50.";
      } else {
        echo "El número es menor a 50.";
      }


echo "<hr>";

      $nombreDeUsuario = 'adminr';
      $ClaveDeUsuario = '1235';

      if ($nombreDeUsuario === 'admin' && $ClaveDeUsuario === '1234') {
        echo "¡Bienvenido a tu cuenta!";
      }else if ($nombreDeUsuario != 'admin' && $ClaveDeUsuario == '1234'){
        echo "Lo sentimos, el usuario es incorrrecto.";
      }else if ($ClaveDeUsuario != '1234'&& $nombreDeUsuario == 'admin'){
        echo "Lo sentimos, la contraseña es incorrrecta.";
      }else {
        echo "Lo sentimos, ambos datos son incorrrectos.";
      }

echo "<hr>";

      $edad = 30;
      $casado = true;
      $sexo = 'Otro';

      if ($edad > 18 && $casado || $sexo === 'Otro') {
        echo 'Bienvenido.';
      }

echo "<hr>";

      $cantidadDeAlumnos = 40;

      if ($cantidadDeAlumnos) {
        echo 'True';
      }else {
        echo 'False';
      }
echo "<hr>";

      if ($i = 0) {
        echo 'True';
      }else {
        echo 'False';
      }

echo "<hr>";

      $numero = 6;

      if ($numero % 2 == 0) {
        echo 'El numero es par.';
      }else {
        echo 'El numero no es par.';
      }

echo "<hr>";

      // IF TERNARIO

      $edad = 18;

      $esMayor = $edad > 18 ? 'Si es mayor' : 'No es mayor';

      echo $esMayor;

//ejercicio11 - color de remera
echo "<hr>";

$colorRemera = "Naranja";

switch($colorRemera == "Azul" || $colorRemera == "Rojo" || $colorRemera == "Amarillo") {
  case true:
    echo "El color de la remera es un color primario";
    break;
  default:
    echo "La remera es de color desconocido";
}


      ?>
      <div
        class=<?php echo 2 > 3 ? 'claseOK' : 'otraCosa' ?>
        >


  </body>
</html>
