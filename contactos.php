<?php

class contactos {
    
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

$clase = new contactos;

$uno = $clase->FunctionName1('Algo');
$dos = $clase->FunctionName2(0, 234);
$tres = $clase->FunctionName3("Algo");
$cuatro = $clase->FunctionName4("TXT");

?>