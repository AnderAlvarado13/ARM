<?php
require_once('Modelo/Conexion.php');
class ModeloRuta
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare('CALL ARM_DatosRutas ();');
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Ruta".$e;
        }
        return $datos;

    }


    public function RutaUnica($unic){
        try {
            $ps=Conexion::Conecta()->prepare('CALL ConsultasRutasUnica (?);');
            $ps->bindParam(1, $unic);
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Ruta Unica".$e;
        }
        return $datos;

    }

    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasRutas (?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Ruta".$e;
        }
        return $consulta;

    }

    public function Insertar($horario, $General, $nombre, $Empresa, $Estado, $tablilla, $bus){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_InsertarRutas  (?,?,?,?,?,?,?)");
                
                $Pss->bindParam(1, $horario);
                $Pss->bindParam(2, $General);
                $Pss->bindParam(3, $nombre);
                $Pss->bindParam(4, $Empresa);
                $Pss->bindParam(5, $Estado);
                $Pss->bindParam(6, $tablilla);
                $Pss->bindParam(7, $bus);
                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Ruta".$e;
        }
        return $res;    
   
    }


    public function Actualizar($id, $horario, $General, $nombre, $Empresa, $Estado, $tablilla, $bus){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarRutas  (?,?,?,?,?,?,?,?);");
            
                $Pss->bindParam(1, $id);
                $Pss->bindParam(2, $horario);
                $Pss->bindParam(3, $General);
                $Pss->bindParam(4, $nombre);
                $Pss->bindParam(5, $Empresa);
                $Pss->bindParam(6, $Estado);
                $Pss->bindParam(7, $tablilla);  
                $Pss->bindParam(8, $bus);  

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Ruta".$e;
        }
        return $res;    

    }

    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarRutas (?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Ruta".$e;
        }
        return $res;    

    }

}
