<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<!-agregamos las dependencias --->
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
     <!-estructura de boostrap --->
     <br><br><br>
     <div class="container">
     	<div class="row">
     		<div class="col-sm-4"></div>
     		<div class="col-sm-4">
     			<div class="panel panel-primary">
     				<div class="panel panel-heading">Login Cristobal Kitoa</div>
     				<!-formulario--->
     				<div class="panel panel-body">
     					<div style="text-align: center;">
     						<img src="img/photoi.jpg" height="270">
     					</div>
     					<p></p>
     					<!-etiquetas--->
     					<label>Usuario</label>
     					<input type="text" id="usuario" class="form-control input-sm" name="">
     					<label>Password</label>
     					<input type="password" id="password" class="form-control input-sm" name="">
     					<p></p>
     					<!-boton--->
     					<span class="btn btn-primary" id="entrarSistema" >Entrar</span>
     					<!-boton registro envia a otra pagina--->
     					<a href="registro.php" class="btn btn-danger">Registro</a>
     				</div>
     			</div>
     		</div>
     		<div class="col-sm-4"></div>
     		
     	</div>
     </div>
</body>
</html>

<!-validacion de login--->

<script type="text/javascript">
	$(document).ready(function(){
      $('#entrarSistema').click(function(){
      	//condicion
      	 if ($('#usuario').val()=="") {
      	 	alertify.alert("Debes agregar el usuario");
      	 	return false;
      	 }else if ($('#password').val()=="") {
      	 	alertify.alert("Debes agregar el password");
      	 	return false;
      	 }

         //logear usuario
         
         cadena="usuario=" + $('#usuario').val() +
                "&password=" + $('#password').val();


         //ajax 

         $.ajax({

             type:"POST",
             url:"php/login.php",
             data:cadena,
             success:function(r){
                 if (r==1) {
                  window.location="inicio.php";
                 }else{
                  alertify.error("Fallo al ingresar");
                 }
             }

         });


      });
	});
</script>