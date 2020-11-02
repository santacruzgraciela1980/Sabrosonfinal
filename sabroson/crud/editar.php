<!DOCTYPE html>
<html lang="en">
    <?php
    $data=array();
    $id=$_GET['id'];
    echo $id;
    $archivo=fopen("../archivos/usuarios.csv","r");
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("|",$linea);
        if(trim($id)==trim($datos[0])){
            $data[0]=$datos[0];
            $data[1]=$datos[1];
            $data[2]=$datos[2];
            $data[3]=$datos[3];
            $data[4]=$datos[4];
            $data[5]=$datos[5];
            $data[6]=$datos[6];
            $data[7]=$datos[7];
            
        }
    }
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="text" name="nombre"placeholder="Nombre y apellido" value="<?php echo $data[1];?>">
                <br>
                <input type="number" name="telefono"placeholder="Telefono" value="<?php echo $data[2];?>" >
                <br>
                <input type="email" name="mail" placeholder="***@gmail.com" value="<?php echo $data[3];?>">
                <br>
                <input type="password" name="contra" placeholder="Contraseña" value="<?php echo $data[4];?>">
                <br>
                <select name="tipo_usuario" id="">
                  <option value="1">Aministrador</option>
                  <option value="2">Cliente</option>
                  <option value="3">Repartidor</option>
                </select>
                <br>
                <input type="text" name="direccion" placeholder="Direccion" value="<?php echo $data[6];?>" >
                <br>
                <select name="localidad" id="">
                  <option value="1">Libertad</option>
                  <option value="2">Merlo</option>
                  <option value="3">Padua</option>
                  <option value="4">Pontevedra</option>
                </select>
                <button type="submit">confirmar</button>
    </form>
    <?php

    
    ?>
</body>
</html>