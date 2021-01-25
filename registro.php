<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<!-agregamos las dependencias --->
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
      <!-estructura de boostrap--->
      <br><br><br>
      <div class="container">
      	<div class="row">
      		<div class="col-sm-4"></div>
      		<div class="col-sm-4">
      			<div class="panel panel-danger">
      				<div class="panel panel-heading">Registro de usuario</div>
      				<!-cuerpo--->
      				 <div class="panel panel-body">
      				 	<!-para limpiar el registro--->
      				 	<form id="frmRegistro" >
      				 	<label>Nombre</label>
      				 	<input type="text" id="nombre" class="form-control input-sm" name="">
      				 	<label>Apellido</label>
      				 	<input type="text" id="apellido" class="form-control input-sm" name="">
      				 	<label>Usuario</label>
      				 	<input type="text" id="usuario" class="form-control input-sm" name="">
      				 	<label>Password</label>
      				 	<input type="password" id="password" class="form-control input-sm" name="">
      				 	<p></p>
      				 	<!-importtante el id jqyery--->
      				 	<span class="btn btn-primary" id="registrarNuevo" >Registrar</span>
      				 	</form>
      				 	<div style="text-align: right;">
      				 		<a href="index.php" class="btn btn-default">Login</a>
      				 	</div>
      				 </div>
      			</div>
      		</div>
      		<div class="col-sm-4"></div>
      		
      	</div>
      	
      </div>
</body>
</html>

<!-vamos a crear los scripts--->

<script type="text/javascript">
	$(document).ready(function(){
		//cuando presione el btn ya hacer la accion id
     $('#registrarNuevo').click(function(){
          
          //llamamos alos id 
          if ($('#nombre').val()=="") {
          	alertify.alert("Debes ingresar el nombre");
          	return false; //se detiene
          }else if ($('#apellido').val()=="") {
          	alertify.alert("Debes ingresar el apellido");
          	return false;
          }else if ($('#usuario').val()=="") {
          	alertify.alert("Debes ingresar el usuario");
          	return false;
          }else if ($('#password').val()=="") {
          	alertify.alert("Debes ingresar el password");
          	return false;
          }

        //crear la cadena 

        cadena="nombre="+ $('#nombre').val() +
               "&apellido="+ $('#apellido').val()+
               "&usuario="+ $('#usuario').val()+
               "&password="+ $('#password').val();

       //vamos hacer el ajax

        $.ajax({

        	type:"POST",
        	url:"php/registro.php",
        	data:cadena,
        	success:function(r){
              if (r==2) {
                alertify.success("Este usuario , ya existe pruebe con otro");
              } 
              else if (r==1) {
               	//con esto solo agregas 1 ala vez
               	$('#frmRegistro')[0].reset();
               	 alertify.success("Agregado con exito");
               }else{
               	alertify.error("No se pudo agregar");
               }
        	}

        });

     });
	});
</script>