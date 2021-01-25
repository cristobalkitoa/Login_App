
<?php 

   session_start();

   if (isset($_SESSION['user'])) {
        
   
 ?>


 <!DOCTYPE html>
<html>
<head>
     <title>inicio</title>
     <?php require_once "scripts.php"; ?>
</head>
<br><br><br>
<body style="background-color: gray">
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <div class="jumbotron">
                    <h2>Entraste con exito</h2>

                     <div style="text-align:right;">
                         <img src="img/photof.jpg" height="300" >
                         
                     </div>
                     <!-ruta donde esta--->
                 <a href="php/salir.php" class="btn btn-success">salir del sistema</a>
                    </div>
               
               </div>
          </div>
    
</body>
</html>

<?php 

 }else{
     header("location:index.php");
 }

 ?>