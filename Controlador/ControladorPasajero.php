<?php
    require_once("Modelo/ModeloPQRS.php");
    require_once('Modelo/ModeloUsuarios.php');
    require_once('Modelo/ModeloDatosPersonales.php');
    require_once('Modelo/ModeloTrayecto.php');
    
    $PER=new ModeloPerfil();    
    $USU=new ModeloUsuarios();
    $pqrs=new ModeloPQRS();
    $TRA=new ModeloTrayecto();

    session_start();
    if(!$_SESSION){
      echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado'); self.location ='Login.php';</script>";
    }else{
  
       $Correo= $_SESSION['Correo'];
       $Nombre= $_SESSION['Nombre'];
       $Apellido= $_SESSION['Apellido'];
       $Rol= $_SESSION['Rol'];
       $CorreoP=$_SESSION['CorreoRE'];
       $NombreP=$_SESSION['NombreRE'];
       $ApellidoP=$_SESSION['ApellidoRE'];
       $TelefonoP=$_SESSION['TelefonoRE'];
       $SexoP=$_SESSION['SexoRE'];
       $FotoP=$_SESSION['FotoRE'];
    }
    
    if($_SESSION['Rol'] == "Pasajero"){     
        $Codigo= $_SESSION['Correo'];
        $data=$PER->Consulta($Codigo);

    if(isset($_POST['Encuentra'])){
        $Salida=$_POST['Salida'];
        $Llegada=$_POST['Llegada'];

        $Resultado=$TRA->FiltroTrayectos($Salida, $Llegada);

    }    

    $PQRS=$pqrs->ConsultaCR($Codigo);


    if(isset($_POST['ActualizarContra'])){
        $Correo=$_POST['Correo'];
        $Nueva=$_POST['Nueva'];
        $Confirmacion=$_POST['Confirmacion'];
 
        if($Confirmacion == $Nueva){
         $resput=$USU->ActualizarContra($Correo,$Nueva);
           if($resput>0){
             echo "
             <script>
             alert('Contraseña Actualizada,  Correctamente');
             </script> 
             ";            
           }else{
             echo "
             <script>
             alert('No se logro actualizar tu contraseña');
             </script> 
             ";             
           }
 
        }else{
          echo "<script type='text/javascript'>alert('Error Confirmacion, Incorreta');</script> ";
        }
     }
   if(isset($_POST['Actualiza'])){
      
      $C=$_POST['Correo'];
      $N=$_POST['Nombres'];
      $A=$_POST['Apellidos'];
      $T=$_POST['Telefono'];
      $S=$_POST['Sexo'];
      $adjunto=$_FILES['imga']['name'];
      $tipos=$_FILES['imga']['type'];
      $tam=$_FILES['imga']['size'];

      if($adjunto!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Nom=$N;
            $adjunto=$Nom."_".$adjunto;
            $carpeta_destino='/home3/arutasm1/public_html/Imagenes/';
            
            $result=$PER->Actualizar($C,$N,$A,$T,$S,$adjunto);
            if($result>0){
              move_uploaded_file($_FILES['imga']['tmp_name'],$carpeta_destino.$adjunto);
              echo "<script type='text/javascript'>alert('Datos personales Actualizados Corectamente');</script> ";
            }
            else{
              echo "<script type='text/javascript'>alert('No se  logro  actualizar los datos');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
          }
        }else{
          echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
        }

      }else{
        $adjunto="PER.png";
        $resp=$PER->Actualizar($C,$N,$A,$T,$S,$adjunto);   
        if($resp>0){
                  
          echo "<script type='text/javascript'>alert('Datos personales Actualizados Corectamente');</script> ";
        }
        else{
          echo "<script type='text/javascript'>alert('No se  logro  actualizar los datos');</script> ";
        }
      }


    }     
  

    require_once('Vista/VistaPasajero.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Pasajero'); self.location ='Login.php';</script>";
    }      
    
?>