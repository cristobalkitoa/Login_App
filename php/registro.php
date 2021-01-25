
<?php 

  require_once "conexion.php";
  $conexion=conexion();

   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $usuario=$_POST['usuario'];
   $password=sha1($_POST['password']);
  //tenemos que encriptar el pass
  //hacemos el sql

   if (buscaRepetido($usuario,$password,$conexion)==1) {
     echo 2;
     //sino esta repetido que haga esto
   }else{

     $sql="INSERT into usuarios(nombre,apellido,usuario,password)
          values('$nombre','$apellido','$usuario','$password')";

   echo $result= mysqli_query($conexion,$sql); 

   }

  
   //validar que no se agreguen los mismos usuarios 

   function buscaRepetido($usuario , $password , $conexion){
    $sql="SELECT * from usuarios where usuario='$usuario'and password='$password'";

    $result=mysqli_query($conexion,$sql);

      if (mysqli_num_rows($result)>0) {
        return 1;
      }else{
        return 0;
      }
   }      

 ?>