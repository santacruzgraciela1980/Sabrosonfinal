<?php
//aqui va la logica de eliminar
$id=$_POST['id'];
echo $id;
$archivo=fopen("../archivos/productos.txt","r")or die("error");//lee el archivo usuarios
$archivo2=fopen("../archivos/productostemp.csv","a+")or die("error");//crea el archivo temporal
while(!feof($archivo)){
    $linea=fgets($archivo);// recorre el archivo , guarda en $linea la linea del mismo
    $datos=explode("|",$linea);
    if(trim($datos[0])!=trim($id) && strlen($linea)>0)// y luego compara lo que se encuentran en la posición 0, que es el Id con el $_GET que contiene
    // el Documento pasado por parametros
    fputs($archivo2,$datos[0].'|'.$datos[1].'|'.$datos[2].'|'.$datos[3]);
}
fclose($archivo);
fclose($archivo2);//cierra los archivos de trabajo y temporal, 
unlink("../archivos/productos.txt");//con unlink borra el anterior
rename("../archivos/productostemp.csv","../archivos/productos.txt");//// renombra con el que trabajamos y lo deja como nuevo archivo de datos real
header("Location:../interfaces/producto.php");

?>




