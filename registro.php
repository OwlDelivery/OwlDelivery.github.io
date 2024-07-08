<html>
<head>
  <title>Problema</title>
</head>

<body>
  <?php
  error_reporting(0);
  $conexion = mysqli_connect("localhost", "root", "", "restaurante") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into pedidos(nombre,direccion,mail,dia,plato) 
  values ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[mail]','$_REQUEST[dia]','$_REQUEST[plato]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Su pedido a sido registrado exitosamente.";
  ?>
</body>

</html>