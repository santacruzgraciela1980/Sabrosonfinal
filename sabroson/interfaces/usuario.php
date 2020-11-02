<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../estilos/estilo.css">    

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sabros&oacute;n</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         cuenta
        </a>
        <?php
        //Mirar aca!!
        require("../crud/funciones.php");
        session_start();
            if(isset($_SESSION['admin'])){
              $nombre=$_SESSION['admin']['nombre'];
               echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<a class='dropdown-item' href='#'>$nombre</a>"; 
                    echo "<a class='dropdown-item' href='#'>Cambiar contraseña</a>";
                    echo"<form action='../acciones/cerrar.php' method='POST'>";
                         echo"<input type='submit' class='dropdown-item' value='Cerrar sesi&oacute;n'>"; 
                    echo"</form>"; 
             echo"</div>"; 
            }
            if(!isset($_SESSION['admin'])){
              header("Location:../index.php");
             }
        ?>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../interfaces/usuario.php">Usuario</a>
          
  
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Producto
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../interfaces/producto.php"> Producto</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Repartidores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Repartidor</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pedidos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href= "../interfaces/pedidos.php">Pedidos</a>
        </div>
      </li>
    </ul>
  </div>
</nav><br><br>
<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
</button>

<!-- Modal -->
<form action="../crud/agregar.php" method="POST">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
            


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <input type="text" name="nombre"placeholder="Nombre y apellido">
                <input type="number" name="telefono"placeholder="Telefono">
                
                <input type="email" name="mail" placeholder="***@gmail.com">
                <input type="password" name="contra" placeholder="Contraseña">
                <input type="password" name="ccontra" placeholder="Confirmar contraseña">
                <select name="tipo_usuario" id="">
                  <option value="1">Aministrador</option>
                  <option value="2">Cliente</option>
                  <option value="3">Repartidor</option>
                </select>
                <input type="text" name="direccion" placeholder="Direccion">
                <select name="localidad" id="">
                  <option value="1">Libertad</option>
                  <option value="2">Merlo</option>
                  <option value="3">Padua</option>
                  <option value="4">Pontevedra</option>
                </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>









  
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre y apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Tipo de usuario</th>
      <th scope="col">Direcci&oacute;n</th>
      <th scope="col">Barrio</th>
      

    </tr>
  </thead>
  <tbody>
    <?php
      $archivo=fopen("../archivos/usuarios.csv","r");
      while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("|",$linea);
        if(strlen($linea)>0){


          echo "<tr>
                  <th scope='row'>$datos[0]</th>
                  <th scope='row'>$datos[1]</th>
                  <td>$datos[2]</td>
                  <td>$datos[3]</td>
                  <td>$datos[4]</td>";
                  $res=buscar_usuario($datos[5]);
                  echo "<td>$res</td>";
                  echo "<td>$datos[6]</td>";
                  $res2=buscar_barrio($datos[7]);
                  echo "<td>$res2</td>";
                  echo "<td>
                        <form action='../crud/eliminar.php' method='POST'>
                            <input type='hidden' name='id' value='$datos[0]'>
                            <button type='submit' style='width:50px; height:35px' class='btn btn-danger' >
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                </svg>
                            </button>
                        </form>
                        <a href='../crud/Editar.php?id=$datos[0]'>
                        <button class='btn btn-primary'  style='width:50px; height:35px'>
                        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-brush' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z'/>
                        </svg> 
                        </button>
                        </a>
                    </td>

                </tr>";
               
        
        
     
        }
        
      
       echo "</tr>";
       echo "</tbody>"; 
              
      }
             
    ?>
    
  </tbody> 
</table>
</div>
<header>
		<div class="container">
			<h3>SABROSÓN ADMINISTRADOR </h3>   
        </div>


</body>
</html>
