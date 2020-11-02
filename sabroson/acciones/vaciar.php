<?php
    echo "Vaciar carrito";
    $carrito=$_POST['carrito'];
    echo $carrito;
    $archivo=fopen("../archivos/carritos/$carrito.csv","w+");
    fputs($archivo,"");
    fclose($archivo);
    header("Location:../interfaces/carrito.php");
?>