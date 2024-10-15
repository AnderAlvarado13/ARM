<?php
    require_once('Modelo/ModeloUsuarios.php');
    require_once('Modelo/ModeloDatosPersonales.php');  
    require_once('Modelo/ModeloRepresentante.php');

    $REP=new ModeloRepresentate();      
    $PER=new ModeloPerfil();    
    $Log=new ModeloUsuarios();

    if(isset($_POST['LogueoBTN'])){
        $Nombre=$_POST['Correo'];
        $Contra=$_POST['Contra'];

        $LG=$Log->Login($Nombre,$Contra);

        if(count($LG)>0){
            foreach($LG as $A){
                if($A[4]=="Administrador" and $A[5]=="Activo"){
                    
                    session_start();
                    $_SESSION['Correo'] = $A[0];
                    $_SESSION['Nombre'] = $A[1];
                    $_SESSION['Apellido'] = $A[2];
                    $_SESSION['Rol'] = $A[4];
                    header('Location:Usuarios.php');
                }else if($A[4]=="Pasajero" and $A[5]=="Activo"){
                    session_start();
                    
                    $_SESSION['Nombre'] = $A[1];
                    $_SESSION['Apellido'] = $A[2];
                    $_SESSION['Rol'] = $A[4];
                    $Correo=$_SESSION['Correo'] = $A[0];
                    $CO=$PER->Consulta($Correo);   
                    foreach($CO as $C){
                        $_SESSION['CorreoRE']=$C[0];
                        $_SESSION['NombreRE']=$C[1];
                        $_SESSION['ApellidoRE']=$C[2];
                        $_SESSION['TelefonoRE']=$C[3];
                        $_SESSION['SexoRE']=$C[4];
                        $_SESSION['FotoRE']=$C[5];

                    }
                    header('Location:Pasajero.php');
                }else if($A[4]=="Representante" and $A[5]=="Activo"){
                    session_start();
                    
                    $_SESSION['Nombre'] = $A[1];
                    $_SESSION['Apellido'] = $A[2];
                    $_SESSION['Rol'] = $A[4];
                    $Correo=$_SESSION['Correo'] = $A[0];
                    $RE=$REP->ConsultaCR($Correo);   
                    foreach($RE as $R){
                        $_SESSION['ID']=$R[0];
                        $_SESSION['CorreoPE']=$R[1];
                        $_SESSION['NombrePE']=$R[2];
                        $_SESSION['ApellidoPE']=$R[3];
                        $_SESSION['TelefonoPE']=$R[4];


                    }
                    header('Location:RepresentanteV2.php');
                }else{
                    echo"<script type='text/javascript'> alert('Su Usuario No cuenta  con  un ROL contacte 
                    a algun Administrador'); self.location='Login.php'; </script>";
                }
            }
            echo"<script type='text/javascript'> alert('Su Usuario No cuenta  con  un ROL contacte 
            a algun Administrador'); self.location='Login.php'; </script>";
            
        }else{
            echo"<script type='text/javascript'> alert('Error, Nick o Clave Incorrectos');
             self.location='Login.php'; </script>";
        }
    }

    if(isset($_POST['Cierra'])){
        session_start();

        if($_SESSION){
            session_destroy();
            echo "<script type='text/javascript'>alert('La Session Ha Terminado');
            self.location='index.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Usuario No Autenticado');
            self.location='Login.php'; </script>";
        }
    }
    



    require_once('Vista/VistaLogin.php');
?>