<?php

class BD{
    

    private static $instancia=NUll;


    public static function crearInstancia(){

        if(!isset(self::$instancia)){

                $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

                self::$instancia= new PDO('mysql:host=localhost:3309;dbname=empleados','root','', $opcionesPDO);
                


        }
        return self::$instancia;
    }

}

?>