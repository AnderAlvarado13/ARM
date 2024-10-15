<?php
require_once('Modelo/Conexion.php');
class ModeloTrayecto
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare('CALL ARM_DatosTrayectos ();');
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Trayecto".$e;
        }
        return $datos;

    }

    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasTrayectos (?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Trayecto".$e;
        }
        return $consulta;

    }

    public function FiltroTrayectos($FiltroS, $FiltroL){

        try{
            $co=Conexion::Conecta()->prepare("CALL Filtro_Pas (?,?);");
            $co->bindParam(1, $FiltroS);
            $co->bindParam(2, $FiltroL);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en el Filtro Trayecto".$e;
        }
        return $consulta;

    }    

    public function Insertar($nombre, $duracion, $frecuencia, $precio, $salida, $llegada, $mapa, $rutas, $empresa){
        try{
            $Pss=Conexion::Conecta()->prepare('CALL ARM_InsertarTrayectos  (?,?,?,?,?,?,?,?,?)');
                
                
                $Pss->bindParam(1, $nombre);
                $Pss->bindParam(2, $duracion);
                $Pss->bindParam(3, $frecuencia);
                $Pss->bindParam(4, $precio);
                $Pss->bindParam(5, $salida);
                $Pss->bindParam(6, $llegada);
                $Pss->bindParam(7, $mapa);
                $Pss->bindParam(8, $rutas);
                $Pss->bindParam(9, $empresa);


                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Trayecto".$e;
        }
        return $res;    
   
    }    

    public function Actualizar($id, $nombre, $duracion, $frecuencia, $precio, $salida, $llegada, $mapa, $rutas, $empresa){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarTrayectos (?,?,?,?,?,?,?,?,?,?);");
                
                $Pss->bindParam(1, $id);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $duracion);
                $Pss->bindParam(4, $frecuencia);
                $Pss->bindParam(5, $precio);
                $Pss->bindParam(6, $salida);
                $Pss->bindParam(7, $llegada);
                $Pss->bindParam(8, $mapa);
                $Pss->bindParam(9, $rutas);
                $Pss->bindParam(10, $empresa);

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Trayecto".$e;
        }
        return $res;    

    }

    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarTrayectos  (?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Trayecto".$e;
        }
        return $res;    

    }

}
