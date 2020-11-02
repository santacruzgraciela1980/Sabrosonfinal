<?php
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $categoria=$_POST['categoria'];
    $precio=$_POST['precio'];
    $archivo=fopen("../archivos/productos.txt","r")or die("error");
    $archivo2=fopen("../archivos/productostemp.txt","a+")or die("error");
    $arreglo=trim($id.'|'.$nombre.'|'.$categoria.'|'.$precio);

    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("|",$linea);
        $cont=0;
        if($datos[0]==""){
        break;
        }
        if(trim($datos[0])==trim($id)&& strlen($linea)>0){
            $cont=1;
            fputs($archivo2,$arreglo."\n");
        }
        if($cont==0){
            fputs($archivo2,trim($datos[0].'|'.$datos[1].'|'.$datos[2].'|'.$datos[3])."\n");
        }
    }
    fclose($archivo);
    fclose($archivo2);
    unlink("../archivos/productos.txt");
    rename("../archivos/productostemp.txt","../archivos/productos.txt");
    header("Location:../interfaces/producto.php");
    


?>