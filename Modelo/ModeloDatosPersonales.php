<?php
require_once('Modelo/Conexion.php');
class ModeloPerfil
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare("CALL ARM_DatosPersonales ();");
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Perfil".$e;
        }
        return $datos;

    }

    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasDatosPersonales (?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Perfil".$e;
        }
        return $consulta;

    }

    public function Insertar($correo,  $nombres, $apellidos, $telefono, $sexo, $foto){ 
        try{
            $Pss=Conexion::Conecta()->prepare('CALL ARM_InsertarDatosPersonales (?,?,?,?,?,?)');
                
                $Pss->bindParam(1, $correo);
                $Pss->bindParam(2, $nombres);
                $Pss->bindParam(3, $apellidos);
                $Pss->bindParam(4, $telefono);
                $Pss->bindParam(5, $sexo);
                $Pss->bindParam(6, $foto);
                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Perfil".$e;
        }
        return $res;    
   
    } 
 
    public function Actualizar($correo, $nombres, $apellidos, $telefono, $sexo, $foto){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarDatosPersonales (?,?,?,?,?,?);");
            
                $Pss->bindParam(1, $correo);
                $Pss->bindParam(2, $nombres);
                $Pss->bindParam(3, $apellidos);
                $Pss->bindParam(4, $telefono);
                $Pss->bindParam(5, $sexo);
                $Pss->bindParam(6, $foto);

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Perfil".$e;
        }
        return $res;    

    }

    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarDatosPersonales (?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Perfil".$e;
        }
        return $res;    

    }
    
}