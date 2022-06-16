<?php

class prueba {
    
    public function FunctionName2($var = null)
    {
        # code...
        echo $var;
    }


    public function FunctionName($var = null, $hola)
    {
        # code...
        echo $var;
        echo $hola;
    }

}

$hola = new prueba;
$algo = $hola->FunctionName('Algo','Nose');

$nose = $hola->FunctionName2();

$dos = $hola->FunctionName2("Uno");





?>