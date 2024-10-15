<?php
require_once('Modelo/Conexion.php');
class ModeloUsuarios
{
    public function Todos(){
        try {
            $ps=Conexion::Conecta()->prepare("CALL ARM_DatosUsuario ();");
            $ps->execute();
            $datos=$ps->fetchAll();

        } catch (Exception $e) {
            echo "Error en  cargar Usuarios".$e;
        }
        return $datos;

    }


    public function Consulta($Varr){

        try{
            $co=Conexion::Conecta()->prepare("Call ARM_ConsultasUsuario(?);");
            $co->bindParam(1, $Varr);
            $co->execute();
            $consulta=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en la Consulta Usuarios".$e;
        }
        return $consulta;

    }
    public function ActualizarContra($correo, $clave){

        try{    
            $co=Conexion::Conecta()->prepare("CALL ARM_ActualizarContra (?,?);");
            $co->bindParam(1, $correo);
            $co->bindParam(2, $clave);

                if($co->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Actualizar Contraseña".$e;
        }
        return $res; 

    } 

    public function Insertar($correo, $nombre, $apellido,  $contra, $rol, $estado){
        try{
            $Pss=Conexion::Conecta()->prepare('CALL ARM_InsertarUsuario (?,?,?,?,?,?);');
                
                $Pss->bindParam(1, $correo);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $apellido);
                $Pss->bindParam(4, $contra);
                $Pss->bindParam(5, $rol);
                $Pss->bindParam(6, $estado);
                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Usuarios".$e;
        }
        return $res;    
   
    }

    public function InsertarRegistro($correo, $nombre, $apellido,  $contra){
        try{
            $Pss=Conexion::Conecta()->prepare('CALL ARM_RegistroUsuario (?,?,?,?);');
                
                $Pss->bindParam(1, $correo);
                $Pss->bindParam(2, $nombre);
                $Pss->bindParam(3, $apellido);
                $Pss->bindParam(4, $contra);
                
                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
        }catch (Exception $e){
            echo "Error en la Insertar Usuarios".$e;
        }
        return $res;    
   
    }    

    public function Actualizar($correo, $nombre, $apellido,  $contra, $rol, $estado){
        try{
            $Pss=Conexion::Conecta()->prepare("CALL ARM_ActualizarUsuario (?,?,?,?,?,?);");
            
            $Pss->bindParam(1, $correo);
            $Pss->bindParam(2, $nombre);
            $Pss->bindParam(3, $apellido);
            $Pss->bindParam(4, $contra);
            $Pss->bindParam(5, $rol);
            $Pss->bindParam(6, $estado);

                if($Pss->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la actualizar Usuario".$e;
        }
        return $res;    

    }
    public function Eliminar($codigo){
        try{
            $ps=Conexion::Conecta()->prepare("Call ARM_EliminarUsuario(?);");
            
            $ps->bindParam(1, $codigo);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
        }catch (Exception $e){
            echo "Error en la Eliminar Usuario".$e;
        }
        return $res;    

    } 

    public function Login($Nick, $Clave){

        try{
            $co=Conexion::Conecta()->prepare("CALL ARM_LOGUEO(?,?); ");
            $co->bindParam(1, $Nick);
            $co->bindParam(2, $Clave);
            $co->execute();
            $Login=$co->fetchAll();

        }catch (Exception $e){
            echo "Error en el LOGIN".$e;
        }
        return $Login;

    }

   



}
