<?php


include './html/punto1.html';

$numero1 =null;
$numero2 =null;
$operacion =null;
$resultado =null;


// $POST=[['numero1']=5,['numero2']=3, ['operacicion']='suma']

if(isset($_POST['numero1']) and isset($_POST['numero2']) and isset($_POST['operacion'])){

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

switch($operacion) {
    case 'suma':
        $resultado = $numero1 + $numero2;
        break;
    
    case 'resta':
            $resultado = $numero1 - $numero2;
            break;

    case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
    case 'division':
       
                    $resultado = $numero1 / $numero2;
                    break;
             
}
         echo "<h4>El resultado de la operacion $operacion es $resultado</h4>";
  
}

?>

