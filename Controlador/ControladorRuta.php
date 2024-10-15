<?php
    require_once('Modelo/ModeloRuta.php');
    require_once('Modelo/ModeloEmpresa.php');

    $RUT=new ModeloRuta();
    $EMP=new ModeloEmpresa();
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
        $Ruta=$RUT->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Ruta=$RUT->Consulta($Varr); 
    }
    $Empresa=$EMP->Todos();
    if(isset($_POST['insert'])){

      $H=$_POST['Horarios'];
      $P=$_POST['Precio'];  
      $N=$_POST['Nombre'];
      $Em=$_POST['Empresa'];
      $E=$_POST['Estado'];
      $adjunto1=$_FILES['Tablilla']['name'];
      $tipos=$_FILES['Tablilla']['type'];
      $tam=$_FILES['Tablilla']['size'];

      $adjunto2=$_FILES['Bus']['name'];
      $tipos=$_FILES['Bus']['type'];
      $tam=$_FILES['Bus']['size'];   

      if($adjunto1!=null and $adjunto2!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Nom=$N;
            $adjunto1=$Nom."_".$adjunto1;
            $adjunto2=$Nom."_".$adjunto2;
            $carpeta_destino='/home3/arutasm1/public_html/Informacion/';   

            $resp=$RUT->Insertar($H,$P,$N,$Em,$E,$adjunto1,$adjunto2);

              if($resp>0){
                move_uploaded_file($_FILES['Tablilla']['tmp_name'],$carpeta_destino.$adjunto1);
                move_uploaded_file($_FILES['Bus']['tmp_name'],$carpeta_destino.$adjunto2);
                echo "<script type='text/javascript'>alert('Ruta Insertada Correctamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se logro Insertar Ruta');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
          }
        
        }else{
          $adjunto1="PER.png";
          $adjunto2="PER.png";
          $resp=$RUT->Insertar($H,$P,$N,$Em,$E,$adjunto1,$adjunto2);
          if($resp>0){
            
            echo "<script type='text/javascript'>alert('Ruta! Insertada Correctamente');</script> ";
          }
          else{
            echo "<script type='text/javascript'>alert('No se logro Insertar Ruta!');</script> ";
          }
        }


    }      

    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$RUT->Consulta($codigo);

    }
    if(isset($_POST['Actualiza'])){
      
      $I=$_POST['ID'];
      $H=$_POST['Horarios'];
      $P=$_POST['Precio'];  
      $N=$_POST['Nombre'];
      $Em=$_POST['Empresa'];
      $E=$_POST['Estado'];
      $adjunto1=$_FILES['Tablilla']['name'];
      $tipos=$_FILES['Tablilla']['type'];
      $tam=$_FILES['Tablilla']['size'];

      $adjunto2=$_FILES['Bus']['name'];
      $tipos=$_FILES['Bus']['type'];
      $tam=$_FILES['Bus']['size'];   

      if($adjunto1!=null and $adjunto2!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Nom=$N;
            $adjunto1=$Nom."_".$adjunto1;
            $adjunto2=$Nom."_".$adjunto2;
            $carpeta_destino='/home3/arutasm1/public_html/Informacion/';   

            $resp=$RUT->Actualizar($I,$H,$P,$N,$Em,$E,$adjunto1,$adjunto2);

              if($resp>0){
                move_uploaded_file($_FILES['Tablilla']['tmp_name'],$carpeta_destino.$adjunto1);
                move_uploaded_file($_FILES['Bus']['tmp_name'],$carpeta_destino.$adjunto2);
                echo "<script type='text/javascript'>alert('Ruta Actualizada Correctamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se logro Actualizar Ruta');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
          }
        
        }else{
          $adjunto1="PER.png";
          $adjunto2="PER.png";
          $resp=$RUT->Actualizar($I,$H,$P,$N,$Em,$E,$adjunto1,$adjunto2);
          if($resp>0){
            
            echo "<script type='text/javascript'>alert('Ruta! Actualizada Correctamente');</script> ";
          }
          else{
            echo "<script type='text/javascript'>alert('No se logro Actualizar Ruta!');</script> ";
          }
        }


    }

    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$RUT->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }  

    require_once('Vista/VistaRuta.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }        
?>    