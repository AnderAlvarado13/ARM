<?php
require_once('Modelo/Conexion.php');
class ModeloEmpresa
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare("CALL ARM_DatosEmpresa ();");
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Empresa".$e;
        }
        return $datos;

    }

    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasEmpresa (?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Empresa".$e;
        }
        return $consulta;

    }

    public function Insertar($id,$nombre, $direccion, $telefono, $nit, $logo){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_InsertarEmpresa (?,?,?,?,?,?);");

                $Pss->bindParam(1, $id);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $direccion);
                $Pss->bindParam(4, $telefono);
                $Pss->bindParam(5, $nit);
                $Pss->bindParam(6, $logo);

                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Empresa".$e;
        }
        return $res;    
   
    }

    public function Actualizar($ID,$nombre, $direccion, $telefono, $nit, $logo){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarEmpresa (?,?,?,?,?,?);");
            
                $Pss->bindParam(1, $ID);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $direccion);
                $Pss->bindParam(4, $telefono);
                $Pss->bindParam(5, $nit);
                $Pss->bindParam(6, $logo);

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Empresa".$e;
        }
        return $res;    

    }

    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarEmpresa (?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Empresa".$e;
        }
        return $res;    

    }
}
