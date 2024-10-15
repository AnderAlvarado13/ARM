<?php
    require_once('Modelo/ModeloEmpresa.php');
    require_once('Modelo/ModeloRepresentante.php');

    $EMP=new ModeloEmpresa();
    $REP=new ModeloRepresentate();
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
        $Empresa=$EMP->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Empresa=$EMP->Consulta($Varr); 
    }   
      

    $Representante=$REP->Todos();
    if(isset($_POST['insert'])){

        $I=$_POST['ID']; 
        $N=$_POST['Nombre'];        
        $Di=$_POST['Direccion'];
        $T=$_POST['Telefono'];
        $Ni=$_POST['Nit'];
        $adjunto=$_FILES['Logo']['name'];
        $tipos=$_FILES['Logo']['type'];
        $tam=$_FILES['Logo']['size'];

        if($adjunto!=null){
          if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
            if($tam<=1000000){
              $Nom=$N;
              $adjunto=$Nom."_".$adjunto;
              $carpeta_destino='/home3/arutasm1/public_html/Informacion/';        
              
              $resp=$EMP->Insertar($I,$N,$Di,$T,$Ni,$adjunto);

              if($resp>0){
                move_uploaded_file($_FILES['Logo']['tmp_name'],$carpeta_destino.$adjunto);
                echo "<script type='text/javascript'>alert('Empresa Insertada Correctamente');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se logro Insertar Empresa');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
          }
        
        }else{
          $adjunto="PER.png";
          $resp=$EMP->Insertar($I,$N,$Di,$T,$Ni,$adjunto);
          if($resp>0){
            
            echo "<script type='text/javascript'>alert('Empresa Insertada Correctamente');</script> ";
          }
          else{
            echo "<script type='text/javascript'>alert('No se logro Insertar Empresa');</script> ";
          }
        }


    }               


    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$EMP->Consulta($codigo);

    }

    if(isset($_POST['Actualiza'])){
      
      $I=$_POST['ID'];
      $N=$_POST['Nombre'];        
      $Di=$_POST['Direccion'];
      $T=$_POST['Telefono'];
      $Ni=$_POST['Nit'];
      $adjunto=$_FILES['Logo']['name'];
      $tipos=$_FILES['Logo']['type'];
      $tam=$_FILES['Logo']['size'];

      if($adjunto!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Nom=$N;
            $adjunto=$Nom."_".$adjunto;
            $carpeta_destino='/home3/arutasm1/public_html/Informacion/';        
            
            $resp=$EMP->Actualizar($I,$N,$Di,$T,$Ni,$adjunto);

            if($resp>0){
              move_uploaded_file($_FILES['Logo']['tmp_name'],$carpeta_destino.$adjunto);
              echo "<script type='text/javascript'>alert('Empresa Actulizada Correctamente');</script> ";
            }
            else{
              echo "<script type='text/javascript'>alert('No se logro Actulizar Empresa');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
          }
        }else{
          echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
        }
      
      }else{
        $adjunto="PER.png";
        $resp=$EMP->Actualizar($I,$N,$Di,$T,$Ni,$adjunto);
        if($resp>0){
          
          echo "<script type='text/javascript'>alert('Empresa Nuevo Actulizada Corectamente');</script> ";
        }
        else{
          echo "<script type='text/javascript'>alert('No se logro  Actulizar el Empresa');</script> ";
        }
      }


  }   

    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$EMP->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }  

    require_once('Vista/VistaEmpresa.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }  
?>