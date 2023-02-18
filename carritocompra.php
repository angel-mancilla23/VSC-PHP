<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/bootstrap.min.js"> </script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Carrito de Compras</title>
   
</head>
<body><br>

<div align="center">
    <h3> Vista de productos disponibles</h3>

    <a href="carrito.php"><img src="imgs/carritoo.png" width="50px;"></a>
    <hr>

    <table class="table table-dark" style="width: 140px;">
    <thead>

        <th>ID</th>
        <th>PRODUCTO</th>
        <th>DESCRIPCION</th>
        <th>ACCIONES</th>
    </thead>

    <tbody>
        <tr style="width:600p;">
            <td style= "width:100px;">1020</td>

            <td style= "width:100px;">
                <img src="imgs/coca.png" width="100px" height="100px">
            </td>

            <td style="width: 300px;">
            Descripcion:<br>$24 | Soda - Este es un producto que puede causar adiccion
            </td>

            <td style="width: 300px;">
            <form action="carritocompra.php" method="POST">
                <input type="hidden" name="txtProducto" value="Coca cola(Lata)">
                <input type="number" name="cant" value="1" style="width:50px;"><br>
                <input type="hidden" name="txtPrecio" value="24">
                <input type="submit" value="Agregar" name="btnAgregar">

            </form>


            
            </td>
</tr>

<tr style="width:600p;">
            <td style= "width:100px;">1202</td>

            <td style= "width:100px;">
                <img src="imgs/cheetos.png" width="100px" height="100px">
            </td>

            <td style="width: 300px;">
            Descripcion:<br>$14 | Este es un producto contiene exceso de calorias
            </td>

            <td style="width: 300px;">
            <form action="carritocompra.php" method="POST">
                <input type="hidden" name="txtProducto" value="Cheetos - Torciditos">
                <input type="number" name="cant" value="1" style="width:50px;"><br>
                <input type="hidden" name="txtPrecio" value="14">
                <input type="submit" value="Agregar" name="btnAgregar">

            </form>


            
            </td>
</tr>
<tr style="width:600p;">
            <td style= "width:100px;">177</td>

            <td style= "width:100px;">
                <img src="imgs/cheetoscolmi.png" width="100px" height="100px">
            </td>

            <td style="width: 300px;">
            Descripcion:<br>$16 | Este es un producto contiene exceso de calorias
            </td>

            <td style="width: 300px;">
            <form action="carritocompra.php" method="POST">
                <input type="hidden" name="txtProducto" value="Cheetos - colmillos">
                <input type="number" name="cant" value="1" style="width:50px;"><br>
                <input type="hidden" name="txtPrecio" value="16">
                <input type="submit" value="Agregar" name="btnAgregar">

            </form>


            
            </td>
</tr>
<tr style="width:600p;">
            <td style= "width:100px;">1202</td>

            <td style= "width:100px;">
                <img src="imgs/pepsi.png" width="100px" height="100px">
            </td>

            <td style="width: 300px;">
            Descripcion:<br>$15 | Soda -Este es un producto contiene exceso de calorias
            </td>

            <td style="width: 300px;">
            <form action="carritocompra.php" method="POST">
                <input type="hidden" name="txtProducto" value="Pepsi (Lata)">
                <input type="number" name="cant" value="1" style="width:50px;"><br>
                <input type="hidden" name="txtPrecio" value="15">
                <input type="submit" value="Agregar" name="btnAgregar">

            </form>


            
            </td>
</tr>
</table>
</div>
<?php

if(isset($_REQUEST["btnAgregar"])){
$producto = $_REQUEST["txtProducto"];
$cantidad = $_REQUEST["cant"];
$precio = $_REQUEST["txtPrecio"];

$_SESSION["carrito"][$producto]["cant"]=$cantidad;
$_SESSION["carrito"][$producto]["precio"]=$precio;

echo "<script>alert('producto $producto agregado con exito al carrito de compras');</script>";
}
?>
</body>
</html>