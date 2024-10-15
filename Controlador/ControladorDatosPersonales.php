<?php
    require_once('Modelo/ModeloDatosPersonales.php');
    require_once('Modelo/ModeloUsuarios.php');
    
    $PER=new ModeloPerfil();
    $USU=new ModeloUsuarios();
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
    if(isset($_POST['todos'])){
        $Perfil=$PER->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Perfil=$PER->Consulta($Varr); 
    }
      


    $Usuarios=$USU->Todos();
    if(isset($_POST['insert'])){
        

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
              
              $resp=$PER->Insertar($C,$N,$A,$T,$S,$adjunto);
              if($resp>0){
                move_uploaded_file($_FILES['imga']['tmp_name'],$carpeta_destino.$adjunto);
                echo "<script type='text/javascript'>alert('Perfil Nuevo insertado Corectamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se logro  Registrar el Perfil');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
          }
        
        }else{
          $adjunto="PER.png";
          $resp=$PER->Insertar($C,$N,$A,$T,$S,$adjunto);
          if($resp>0){
            
            echo "<script type='text/javascript'>alert('Perfil Nuevo insertado Corectamente');</script> ";
          }
          else{
            echo "<script type='text/javascript'>alert('No se logro  Registrar el Perfil');</script> ";
          }
        }


    }     

    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$PER->Consulta($codigo);

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
    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$PER->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }  

    require_once('Vista/VistaDatosPersonales.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }  
    
?> 