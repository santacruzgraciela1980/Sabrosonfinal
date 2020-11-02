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
      <li class="nav-item">
        <a class="nav-link" href="../Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Registro
        </a>
        <?php
            if(isset($_SESSION['user'])){
               echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<a class='dropdown-item' href='#'>Mis datos</a>"; 
                    echo "<a class='dropdown-item' href='#'>Cambiar contraseña</a>";
                    echo"<form action='../acciones/cerrar.php' method='POST'>";
                      echo"<input type='submit' class='dropdown-item' value='Cerrar sesi&oacute;n'>"; 
                    echo"</form>";  
             echo"</div>"; 
            }
            if(!isset($_SESSION['user'])){
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                     echo "<a class='dropdown-item' href='../interfaces/login.php'>Iniciar sesi&oacute;n</a>"; 
                     echo "<a class='dropdown-item' href='../interfaces/registro.php'>Crear una cuenta</a>";
              echo"</div>"; 
             }
        ?>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="../productos/combos.php">Combos</a>
          <a class="dropdown-item" href="../productos/pizzas.php">Pizzas</a>
          <a class="dropdown-item" href="../productos/empanadas.php">Empanadas</a>
          <a class="dropdown-item" href="../productos/hamburguesas.php">Hamburguesas</a>
          <a class="dropdown-item" href="../productos/bebidas.php">Bebidas</a>
          <a class="dropdown-item" href="../productos/postres.php">Postres</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Carrito</a>
      </li>
  
    </ul>
  </div>
</nav><br><br>



<div class="container">
 
  <h1 id="mensajeformu">Para finalizar la compra necesita estar registrado</h1>
    <a href="../interfaces/registro.php" id="volver">Registrarme</a>
   
  </div>
</div>

</div>
</body>
</html>
