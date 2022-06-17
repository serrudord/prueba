<?php

class prueba {
    
    public function FunctionName1($var = null)
    {
        # code...
        echo "El valor de la función es: ";
        echo $var;
    }


    public function FunctionName2($var = null, $hola)
    {
        # code...
        echo "El valor de la función es: ";
        echo $var;
        echo $hola;
    }
    
    public function FunctionName3($var = null)
    {
        # code...
        echo "El valor de la función es: ";
        echo $var;
    }

    public function FunctionName4($var = null)
    {
        # code...
        echo "El valor de la función es: ";
        echo $var;
        
    }

}

$hola = new prueba;
$algo = $hola->FunctionName2('Algo', Null);

$nose = $hola->FunctionName2(0, 234);

$dos = $hola->FunctionName2("Uno", "Dos");

?>