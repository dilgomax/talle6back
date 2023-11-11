<?php

include "./html/punto4.html";

const constante_18 =18;
define ("constante0","0");
  

if (isset($_POST['verificar'])) {
    $fecha = new DateTime($_POST['fecha_nacimiento']);
   
    $date2 = new DateTime(date("y-m-d"));

    $fecha_actual = $fecha->diff($date2);

    $edad_actual = $fecha_actual->y;
    $edad_meses = $fecha_actual->m;
    $edad_dias = $fecha_actual->d;

    if ($edad_actual >= constante_18) {
        echo "<h2>Su edad es de "  .$edad_actual. " años por tanto: Es mayor de edad. </h6>";
    }
    #else if 818 > $edad && 0 < edad)
    else if ($edad_actual < constante_18 && $edad_actual > constante0 ) {
        echo "<h2>Su edad es de "  .$edad_actual. " años por tanto: Es menor de edad. </h6>";

    }else {
        echo "<h6> No valido </h6>";
    }

    echo "<h6> Usted tiene  ".$edad_actual." años, ".$edad_meses."<h6> meses  y  ".$edad_dias. " dias.</h6>";
    

}


?>
