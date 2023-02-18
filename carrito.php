<?php
session_start();
//session_destroy();

?>

<?php 
$total=0;
echo "<h3>CARRITO DE COMPRAS:</h3>";

if(isset($_SESSION["carrito"])){

foreach($_SESSION["carrito"] as $indice =>$arreglo){
    echo "<hr>producto: <strong>". $indice . "</strong><br>";
   $total += $arreglo["cant"]*$arreglo["precio"];
   
    foreach($arreglo as $key =>$value){
        echo $key .": " . $value . "<br>";
    }
    echo "<a href='carrito.php?item=$indice'>Eliminar Item</a>";
}
echo"<h3>EL total de la compra actual es de $ $total </h3>";
echo '<br><br><a href="carritocompra.php"> BACK    | </a>
<a href="carrito.php?vaciar=true">VACIAR CARRITO</a>';
}else{

    echo "<script>alert('el carrito esta vacio');</script>";
    ?>

    <a href="carritocompra.php">Back</a>
    
   
    <?php
}

if(isset($_REQUEST["vaciar"])){
session_destroy();
header("location:carrito.php");

}
if(isset($_REQUEST["item"])){
$producto=$_REQUEST["item"];
//echo "<script>alert('$producto');</script>";
unset($_SESSION["carrito"][$producto]);
echo"<script>alert('Se elimino el producto: $producto');</script";
header("location:carrito.php");
}
?> 