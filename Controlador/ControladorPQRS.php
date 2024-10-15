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
    if($_SESSION['Rol'] == "Administrador"){ 
        $PQRS=$pqrs->Todos();

    if(isset($_POST['Consultar'])){
        $Varr=$_POST['Varr'];
        $PQRS=$pqrs->Consulta($Varr);
    }



    if(isset($_POST['insert'])){
        $T=$_POST['Tipo'];
        $N=$_POST['Nombre'];
        $M=$_POST['Mensaje'];
        $R=$_POST['Respuesta'];
        $adjunto=$_FILES['Evidencia']['name'];
        $tipos=$_FILES['Evidencia']['type'];
        $tam=$_FILES['Evidencia']['size'];
        $A=$_POST['Administrador'];
        $C=$_POST['Correo'];
        $D=$_POST['Dirigida'];

        if($adjunto!=null){
            if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
              if($tam<=1000000){
                $Nom=$N;
                $adjunto=$Nom."_".$adjunto;
                $carpeta_destino='/home3/arutasm1/public_html/Evidencias/';        

                $resp=$pqrs->Insertar($T,$N,$M,$R,$adjunto,$A,$C,$D);
                if($resp>0){
                    move_uploaded_file($_FILES['Evidencia']['tmp_name'],$carpeta_destino.$adjunto);
                    echo "<script type='text/javascript'>alert('PQRS insertado Corectamente');</script> ";
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
              $resp=$pqrs->Insertar($T,$N,$M,$R,$adjunto,$A,$C,$D);
              if($resp>0){
                
                echo "<script type='text/javascript'>alert('PQRS insertado Corectamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se inserto el PQRS');</script> ";
              }
            }
    } 

    if(isset($_POST['actualizar'])){
        $codigo=$_POST['Codigo'];
        $data=$pqrs->Consulta($codigo);
  
    }
    if(isset($_POST['Actualiza'])){
      $I=$_POST['ID'];
      $T=$_POST['Tipo'];
      $N=$_POST['Nombre'];
      $M=$_POST['Mensaje'];
      $Fe=$_POST['FechaEnvio'];
      $Fr=$_POST['FechaRespuesta'];
      $R=$_POST['Respuesta'];
      $E=$_POST['Evidencia'];
      $A=$_POST['Administrador'];
      $C=$_POST['Correo'];
      $D=$_POST['Dirigida'];

              $resp=$pqrs->Actualizar($I,$T,$N,$M,$Fe,$Fr,$R,$E,$A,$C,$D);
              if($resp>0){
                  echo "<script type='text/javascript'>alert('Su PQRS ha sido Respondida Corectamente');</script> ";
                }
                else{
                  echo "<script type='text/javascript'>alert('No se Respondio el PQRS');</script> ";
                }
  }
/*     if(isset($_POST['Actualiza'])){
        $I=$_POST['ID'];
        $N=$_POST['Nombre'];
        $M=$_POST['Mensaje'];
        $Fe=$_POST['FechaEnvio'];
        $Fr=$_POST['FechaRespuesta'];
        $R=$_POST['Respuesta'];
        $adjunto=$_FILES['Evidencia']['name'];
        $tipos=$_FILES['Evidencia']['type'];
        $tam=$_FILES['Evidencia']['size'];
        $A=$_POST['Administrador'];
        $C=$_POST['Correo'];
        if($adjunto!=null){
            if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
              if($tam<=1000000){
                $Nom=$N;
                $adjunto=$Nom."_".$adjunto;
                $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PHP/AppARM/Evidencias/'; 
                $resp=$pqrs->Actualizar($I,$N,$M,$Fe,$Fr,$R,$adjunto,$A,$C);
                if($resp>0){
                    move_uploaded_file($_FILES['Evidencia']['tmp_name'],$carpeta_destino.$adjunto);
                    echo "<script type='text/javascript'>alert('PQRS Actualizado Corectamente');</script> ";
                  }
                  else{
                    echo "<script type='text/javascript'>alert('No se Actualizado el PQRS');</script> ";
                  }
                }else{
                  echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
                }
              }else{
                echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
              }
            
        }else{
              $adjunto="PER.png";
              $resp=$pqrs->Actualizar($I,$N,$M,$Fe,$Fr,$R,$adjunto,$A,$C);
              if($resp>0){
                
                echo "<script type='text/javascript'>alert('PQRS Actualizado Corectamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se Actualizado el PQRS');</script> ";
              }
            }
    
    
    }  */

    if(isset($_POST['elimina'])){
        $cod=$_POST['Codigo'];

        $result=$pqrs->Eliminar($cod);
        if($result>0){
            echo "<script type='text/javascript'> alert('Datos Eliminados con Exito');</script>";
        }else{
            echo "<script type='text/javascript'> alert('No se logro Eliminar los Datos');</script>";
        }
    }

    require_once('Vista/VistaPQRS.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }     
?>    
    
