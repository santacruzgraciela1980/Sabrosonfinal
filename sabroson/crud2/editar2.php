<!DOCTYPE html>
<html lang="en">
    <?php
    $data=array();
    $id=$_GET['id'];
    echo $id;
    $archivo=fopen("../archivos/productos.txt","r");
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("|",$linea);
        if(trim($id)==trim($datos[0])){
            $data[0]=$datos[0];
            $data[1]=$datos[1];
            $data[2]=$datos[2];
           $data[3]=trim($datos[3]);
           
            
        }
    }
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="text" name="nombre"placeholder="Nombre del producto" value="<?php echo $data[1];?>">
                <br>
                <select name="categoria" id="">
                  <option value="1">Combos</option>
                  <option value="2">Pizzas</option>
                  <option value="3">Empanadas</option>
                  <option value="4">Hamburguesas</option>
                  <option value="5">bebidas</option>
                  <option value="6">postres</option>
                </select>
                <br>
                <input type="number" name="precio"placeholder="precio" value="<?php echo $data[3];?>" >
                <br>
                <button type="submit">confirmar</button>
    </form>
    <?php
    ?>
</body>
</html>