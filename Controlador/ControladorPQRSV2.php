<?php
    require_once("Modelo/ModeloPQRS.php");
    $pqrs=new ModeloPQRS();

    session_start();
    if(!$_SESSION){
      echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado'); self.location ='Login.php';</script>";
    }else{
  
       $Correo= $_SESSION['Correo'];
       $Nombre= $_SESSION['Nombre'];
       $Apellido= $_SESSION['Apellido'];
       $Rol= $_SESSION['Rol'];
    }

    if($_SESSION['Rol'] == "Pasajero" or !$_SESSION['Rol'] == "Admistrador" ){     
        if(isset($_POST['PasajeroPQRS'])){
            $T=$_POST['Tipo'];
            $N=$_POST['Nombre'];
            $M=$_POST['Mensaje'];
            $adjunto=$_FILES['Evidencia']['name'];
            $tipos=$_FILES['Evidencia']['type'];
            $tam=$_FILES['Evidencia']['size'];
            $C=$_POST['Correo'];
            $D=$_POST['Dirigida'];
      
            if($adjunto!=null){
                if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
                  if($tam<=1000000){
                    $Nom=$N;
                    $adjunto=$Nom."_".$adjunto;
                    $carpeta_destino='/home3/arutasm1/public_html/Evidencias/';        
      
                    $resp=$pqrs->InsertarPQRS($T,$N,$M,$adjunto,$C,$D);
                    if($resp>0){
                        move_uploaded_file($_FILES['Evidencia']['tmp_name'],$carpeta_destino.$adjunto);
                        echo "<script type='text/javascript'>alert('PQRS insertado Corectamente');</script> ";
                        header('Location:Pasajero.php');
                      }
                      else{
                        echo "<script type='text/javascript'>alert('No se inserto el PQRS');</script> ";
                      }
                    }else{
                      echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
                    }
                  }else{
                    echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
                  }
                
            }else{
                  $adjunto="PER.png";
                  $resp=$pqrs->InsertarPQRS($T,$N,$M,$adjunto,$C,$D);
                  if($resp>0){
                    
                    echo "<script type='text/javascript'>alert('PQRS insertado Corectamente Pero no  escogite una Evidencia');</script> ";
                    header('Location:Pasajero.php');
                  }
                  else{
                    echo "<script type='text/javascript'>alert('No se inserto el PQRS');</script> ";
                  }
                }
                
        }


    require_once("Vista/VistaPQRSV2.php");
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Pasajero'); self.location ='Login.php';</script>";
    }   
?>