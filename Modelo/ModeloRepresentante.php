<?php
require_once('Modelo/Conexion.php');
class ModeloRepresentate
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare('CALL ARM_DatosRepresentante ();');
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Buses".$e;
        }
        return $datos;

    }

    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasRepresentante(?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Buses".$e;
        }
        return $consulta;

    }

    public function ConsultaCR($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasRepresentanteCorreo(?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Buses".$e;
        }
        return $consulta;

    }    

    public function Insertar( $correo, $nombre, $apellido, $telefono){
        try{
            $Pss=Conexion::Conecta()->prepare('CALL ARM_InsertarRepresentante(?,?,?,?);');
                
                $Pss->bindParam(1, $correo);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $apellido);
                $Pss->bindParam(4, $telefono);
                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Buses".$e;
        }
        return $res;    
   
    }

    public function Actualizar($id, $correo, $nombre, $apellido, $telefono){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarRepresentante (?,?,?,?,?);");
                
                $Pss->bindParam(1, $id);
                $Pss->bindParam(2, $correo);
                $Pss->bindParam(3, $nombre);
                $Pss->bindParam(4, $apellido);
                $Pss->bindParam(5, $telefono);

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Buses".$e;
        }
        return $res;    

    }

    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarRepresentante (?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Buses".$e;
        }
        return $res;    

    }
}
