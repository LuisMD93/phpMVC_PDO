<?php session_start(); //indico que trbajare con variables de sessiones ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>php-MVC</title>
  </head>
  <body>

      <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
      </div>

      <div class="container-fluid bg-light">
         <div class="container">

         

            <ul class="nav nav-justified py-2 nav-pills">
            <?php if(isset($_GET["pages"])): ?>
            <?php if($_GET["pages"]=="registro"): ?>
              <li class="nav-item"><a class="nav-link active" href="index.php?pages=registro">Registro</a></li>
           
          <?php else : ?> 
            <li class="nav-item"><a class="nav-link" href="index.php?pages=registro">Registro</a></li>
          <?php endif ?>
          <?php endif ?>

          <?php if(isset($_GET["pages"])): ?>
            <?php if($_GET["pages"]=="ingreso"): ?>
           
              <li class="nav-item"><a class="nav-link active" href="index.php?pages=ingreso">Ingreso</a></li>
           
          <?php else : ?> 
            <li class="nav-item"><a class="nav-link" href="index.php?pages=ingreso">Ingreso</a></li>
          <?php endif ?>
          <?php endif ?>
          <?php if(isset($_GET["pages"])): ?>
            <?php if($_GET["pages"]=="inicio"): ?>
             
              <li class="nav-item"><a class="nav-link active" href="index.php?pages=inicio">Inicio</a></li>
           
          <?php else : ?> 
              <li class="nav-item"><a class="nav-link" href="index.php?pages=inicio">Inicio</a></li>
          <?php endif ?>
          <?php endif ?>

          <?php if(isset($_GET["pages"])): ?>
            <?php if($_GET["pages"]=="salir"): ?>
            
              <li class="nav-item"><a class="nav-link active" href="index.php?pages=salir">Salir</a></li>   
           
          <?php else : ?> 
             <li class="nav-item"><a class="nav-link" href="index.php?pages=salir">Salir</a></li>   
          <?php endif ?>
          <?php else: ?>


                <li class="nav-item"><a class="nav-link" href="index.php?pages=registro">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?pages=ingreso">Ingreso</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.php?pages=inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?pages=salir">Salir</a></li>     

          <?php endif ?>  
         </div>
          
      </div>

      <div class="container-fluid py-4">
        <div class="container">
            <?php  
            
               if(isset($_GET["pages"])) {
                
                 if($_GET["pages"]=="registro" || $_GET["pages"]=="ingreso" || $_GET["pages"]=="inicio" || $_GET["pages"]=="salir" || $_GET["pages"]=="editar"){


                  include_once "Pages/".$_GET['pages'].".php";
                 }else{
                  include_once "Pages/404.php";
                 }

               }else{
                   require_once "Pages/inicio.php";
               }
               
               ?>
        </div>    
     </div>
     
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fb944c8aa.js" crossorigin="anonymous"></script>
  </body>
</html>