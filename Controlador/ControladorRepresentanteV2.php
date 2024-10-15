<?php
    require_once('Modelo/ModeloRepresentante.php');
    require_once('Modelo/ModeloUsuarios.php');
    require_once('Modelo/ModeloEmpresa.php');
    require_once('Modelo/ModeloRuta.php');
    require_once("Modelo/ModeloPQRS.php");

    $pqrs=new ModeloPQRS();
    $RUT=new ModeloRuta();
    $EMP=new ModeloEmpresa();
    $REP=new ModeloRepresentate();
    $USU=new ModeloUsuarios();
    session_start();
    if(!$_SESSION){
      echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado'); self.location ='Login.php';</script>";
    }else{
  
       $Correo= $_SESSION['Correo'];
       $Nombre= $_SESSION['Nombre'];
       $Apellido= $_SESSION['Apellido'];
       $Rol= $_SESSION['Rol'];
       $ID=$_SESSION['ID'];
       $CorreoR= $_SESSION['CorreoPE'];
       $NombreR= $_SESSION['NombrePE'];
       $ApellidoR= $_SESSION['ApellidoPE'];
       $TelefonoR= $_SESSION['TelefonoPE'];       

    }
    if($_SESSION['Rol'] == "Representante"){       
    
    $ID=$_SESSION['ID'];
    $CorreoR= $_SESSION['CorreoPE'];

    $Repre=$REP->Consulta($ID); 
    $PQRS=$pqrs->Todos();

    if(isset($_POST['actualizarPQR'])){
      $codigo=$_POST['Codigo'];
      $dataPQR=$pqrs->Consulta($codigo);

  }
  if(isset($_POST['ActualizaPQR'])){
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

    if (isset($_POST['Empresa'])) {
        $Empresa=$EMP->Consulta($ID); 
    } 
    if (isset($_POST['Rutas'])) {
        $Ruta=$RUT->RutaUnica($ID); 
    }

    if(isset($_POST['actualizar'])){
        $codigo=$_POST['Codigo'];
        $datas=$EMP->Consulta($codigo);
  
    }
    $Empresa=$EMP->Consulta($ID); 
    
    if(isset($_POST['insertRU'])){

      $H=$_POST['Horarios'];
      $P=$_POST['Precio'];  
      $N=$_POST['Nombre'];
      $Em=$_POST['Empresa'];
      $E=$_POST['Estado'];
      $adjunto1=$_FILES['Tablill']['name'];
      $tipos=$_FILES['Tablill']['type'];
      $tam=$_FILES['Tablill']['size'];

      $adjunto2=$_FILES['Bu']['name'];
      $tipos=$_FILES['Bu']['type'];
      $tam=$_FILES['Bu']['size'];   

      if($adjunto1!=null and $adjunto2!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Nom=$N;
            $adjunto1=$Nom."_".$adjunto1;
            $adjunto2=$Nom."_".$adjunto2;
            $carpeta_destino='/home3/arutasm1/public_html/Informacion/';   

            $resp=$RUT->Insertar($H,$P,$N,$Em,$E,$adjunto1,$adjunto2);

              if($resp>0){
                move_uploaded_file($_FILES['Tablill']['tmp_name'],$carpeta_destino.$adjunto1);
                move_uploaded_file($_FILES['Bu']['tmp_name'],$carpeta_destino.$adjunto2);
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
    
    
    if(isset($_POST['actualizarRu'])){
        $codigo=$_POST['Codigo'];
        $datar=$RUT->Consulta($codigo);
  
      }
      if(isset($_POST['ActualizaRu'])){
        
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



    if(isset($_POST['insertEmp'])){

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


    if(isset($_POST['ActualizaEmp'])){
        
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


    $data=$REP->Consulta($ID);
    if(isset($_POST['Actualiza'])){
      
        $I=$_POST['ID'];
        $C=$_POST['Correo'];
        $N=$_POST['Nombre'];
        $A=$_POST['Apellido'];
        $T=$_POST['Telefono'];
  
        $result=$REP->Actualizar($I,$C,$N,$A,$T);
        if($result>0){
          echo "<script type='text/javascript'>alert('Datos Actualizados');</script> ";
        }
        else{
          echo "<script type='text/javascript'>alert('No se logro  Actulizar Datos');</script> ";
        }
      }
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
    require_once('Vista/VistaRepresentanteV2.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Representante'); self.location ='Login.php';</script>";
    }      
?>