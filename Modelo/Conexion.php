<?php

class Conexion
{
    public static function Conecta(){

        try{

            $cnn= new PDO('mysql:host=localhost;dbname=ARM_proyecto','root','Ander130623');
            
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            
        }
        catch(Exception $e){
            die("Error en la conexion".$e->GetMessage());
            echo "Linea de Error".$e->getLine();
        }
    return $cnn;

    }
}
$x=new Conexion();
$conect=$x->Conecta();

?>