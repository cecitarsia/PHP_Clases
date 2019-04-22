<?php
$numeroMagico = 3;

// a. MAYOR
  function mayor($num1,$num2,$num3) {
    if ($num1 > $num2 && $num > $num3) {
      return $num1;
    }elseif ($num2 > $num1 && $num2 > $num3) {
      return $num2;
    }else {
      return $num3;
    }
    }
    echo mayor(3,4,1);

echo "<hr>";

//b. TABLA
function tabla($base,$limite) {
  $resultado = [];
  for ($i=$base; $i<=$limite; $i++) {
    $resultado[] = $i;
  }
  return $resultado;

  }
echo '<pre>';
var_dump(tabla(3,9));






 ?>
