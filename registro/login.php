<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Owl Delivery</title>
	<link href="https://fonts.google.com/specimen/Kalam">

</head>

<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


<form action="" method="post">

<div class="contener-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>

            <div class="col-md-8">
            </br>
            <div class="card text-white bg-dark">
            <div class="card-header bg-info" style="text-align:center"><h1>Inicio de Sesión</h1></div>
            <div class="card-body"> 
            </br>
Ingrese su nombre de usuario:
<input type="text"  class="form-control"  name="Usuario" id="" required>
</br>

Igrese su contraseña:
<input type="Password" class="form-control" name="Contra" id=""required>
</br></br>

<input type="submit" class="btn btn-info btn-lg btn-block" value="Enviar">
</div>
</div>
            </div>

            <div class="col-md-2">
            </div>  
        </div>
    </div>

</form>


<?php

session_start();

if($_POST){

 if(($_POST["Usuario"]=="Eduardo")&&($_POST["Contra"]=="456")){

    $_SESSION["Usuario"]="Eduardo";
    header("location:index.php");
 }
else{
    echo "<script> alert('La Contraseña o Usuario es incorrecto'); </script>";
}

}

?>


<a href="cerrar.php"><button class="btn"> Cerrar sesión <img src="imagenes/cerrar-sesion.png" width="30" height="30" /></button></a>

</body>
</html>