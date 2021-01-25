

<?php 
   //validar la session
   session_start();
   require_once "conexion.php";
   //creacion de variables de conexion
   $conexion=conexion();

   //tenemos que poner los 2 variables 

    $usuario=$_POST['usuario'];
    $pass=sha1($_POST['password']);
    //encryptar la pass


    //hacemps el sql

    $sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";

    $result=mysqli_query($conexion,$sql);

    //importante 
    if (mysqli_num_rows($result)>0) {

    	$_SESSION['user']=$usuario;
    	echo 1;
    }else{
    	echo 2;
    }

 ?>