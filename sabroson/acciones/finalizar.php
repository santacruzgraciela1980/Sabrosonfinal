<?php
    $pedidos="../archivos/pedidos.csv";
    $carrito=$_POST['carrito'];
    $direccion=$_POST['direccion'];
    $localidad=$_POST['localidad'];
    $estado="No entregado";
    echo $direccion;
    $archivo=fopen("../archivos/carritos/$carrito.csv",'r');
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode('|',$linea);
        $prod=$datos[0];
        $precio=$datos[1];
        $arreglo=$prod.'|'.$precio.'|'.$direccion.'|'.$localidad.'|'.$estado.'|'.date("H:i")."\n";
        $archivo2=fopen($pedidos,'a+');
        while(!feof($archivo)){
            fputs($archivo2,$arreglo);
        break;
        }
        fclose($archivo2);

    }
    fclose($archivo);
    $archivo=fopen("../archivos/carritos/$carrito.csv",'w+');
    fputs($archivo,"");
    fclose($archivo);
    header("Location:../interfaces/compra_finalizada.php");
?>