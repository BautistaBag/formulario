<?
//recibo los datos que cargan en formulario
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$total = $precio * $cantidad;

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>
  <style>

  </style>
</head>
<body>
<!--muestro por pantalla los valores elegidos en el anterior fuente-->
<h1>Total a pagar: </h1>
<p>Producto: <? echo $producto?></p>
<p>Precio: <? echo $precio?></p>
<p>Cantidad: <? echo $cantidad?></p>
<p>Total: <? echo $total?></p>
</body>
</html>
