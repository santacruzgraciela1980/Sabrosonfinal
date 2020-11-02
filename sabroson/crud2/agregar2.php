<?php
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];


$cont=0;
$archivo=fopen("../archivos/id_producto.txt","r")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    $cont=$datos[0]+1;

}
fclose($archivo);
$archivo=fopen("../archivos/id_producto.txt","w+")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    fputs($archivo,$cont);

}
fclose($archivo);

$arreglo=$cont.'|'.$nombre.'|'.$categoria.'|'.$precio."\n";


$archivo=fopen("../archivos/productos.txt","a+");
fputs($archivo,$arreglo);
fclose($archivo);
header("Location:../interfaces/producto.php");

?>