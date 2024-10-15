<?php
    require_once("Modelo/Conexion.php");
    class ModeloPQRS
    {
        public function Todos(){
            try {
                $ps=Conexion::Conecta()->prepare("CALL ARM_DatosPQRS ();");
                $ps->execute();
                $datos=$ps->fetchAll();

            } catch (Exception $e) {
                echo "Error Cargando el PQRS".$e;
            }
            return $datos;
        }

        public function Consulta($Varr){
            try {
                $co=Conexion::Conecta()->prepare("Call ARM_ConsultasPQRS (?);");
                $co->bindParam(1,$Varr);
                $co->execute();
                $consulta=$co->fetchAll();
                
            } catch (Exception $e) {
                echo "Error Consutando PQRS".$e;
            }

            return $consulta;
        }

        public function ConsultaCR($Varr){
            try {
                $co=Conexion::Conecta()->prepare("Call ARM_ConsultasCRPQRS (?);");
                $co->bindParam(1,$Varr);
                $co->execute();
                $consulta=$co->fetchAll();
                
            } catch (Exception $e) {
                echo "Error Consutando CR PQRS".$e;
            }

            return $consulta;
        }

        public function InsertarPQRS($tipo, $nombre, $mensaje, $archivo, $correo, $dirigida){
            try {
                $ps=Conexion::Conecta()->prepare("CALL ARM_PasajerosPQRS (?,?,?,?,?,?);");
                $ps->bindParam(1,$tipo);
                $ps->bindParam(2,$nombre);
                $ps->bindParam(3,$mensaje);
                $ps->bindParam(4,$archivo);
                $ps->bindParam(5,$correo);
                $ps->bindParam(6,$dirigida);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
            } catch (Exception $e) {
                echo "Error al  Insertar PQRS".$e;
            }
            return $res;

        }



        public function Insertar($tipo, $nombre, $mensaje,$respuesta, $archivo, $administrador, $correo, $dirigida){
            try {
                $ps=Conexion::Conecta()->prepare("CALL ARM_InsertarPQRS (?,?,?,?,?,?,?,?);");
                $ps->bindParam(1,$tipo);
                $ps->bindParam(2,$nombre);
                $ps->bindParam(3,$mensaje);
                $ps->bindParam(4,$respuesta);
                $ps->bindParam(5,$archivo);
                $ps->bindParam(6,$administrador);
                $ps->bindParam(7,$correo);
                $ps->bindParam(8,$dirigida);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
            } catch (Exception $e) {
                echo "Error al  Insertar PQRS".$e;
            }
            return $res;

        }

        public function Actualizar($id, $tipo, $nombre, $mensaje, $fechaenvio, $fecharespuesta, $respuesta, $archivo, $administrador, $correo, $dirigida){
            try {
                $ps=Conexion::Conecta()->prepare("CALL ARM_ActualizarPQRS (?,?,?,?,?,?,?,?,?,?,?);");
                $ps->bindParam(1,$id);
                $ps->bindParam(2,$tipo);
                $ps->bindParam(3,$nombre);
                $ps->bindParam(4,$mensaje);
                $ps->bindParam(5,$fechaenvio);
                $ps->bindParam(6,$fecharespuesta);
                $ps->bindParam(7,$respuesta);
                $ps->bindParam(8,$archivo);
                $ps->bindParam(9,$administrador);
                $ps->bindParam(10,$correo);
                $ps->bindParam(11,$dirigida);

                if($ps->execute()){
                    $res=1;
                }
                else{
                    $res=0;
                }
                
            } catch (Exception $e) {
                echo "Error al  Actualizar PQRS".$e;
            }
            return $res;

        }


        public function Eliminar($codigo){
            try {
                $ps=Conexion::Conecta()->prepare("Call ARM_EliminarPQRS (?);");
                
                $ps->bindParam(1,$codigo);

                    if($ps->execute()){
                        $res=1;
                    }
                    else{
                        $res=0;
                    }

            } catch (Exception $e) {
                echo "Error al  Eliminar PQRS".$e;
            }
            return $res;
        }

    }

?>