<?php
  session_start();
    include('conexion.php');
    if(isset($_SESSION['usuario'])){
   
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Resgistro</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="iniciar.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
        </nav>
</header>  
<section class="container">
    <div class="container-fluid p-0 mb-5">
        <div class="row">
                <div class="img2"> 
                    <div class="container py-lg-2 py-2">
                        <div class="row">                         
                            <nav class="navbar navbar-expand nav-1">
                            <ul class="navbar-nav">
                            <h2 class="pt-2 text-black text-center font-weight-bold">REGISTRO</h2>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-md-4">
                <br>
                <form action="registrar.php" method="POST">
                <div class="form-group">
                        <input
                            type="text"
                            name="nombres"
                            id="nombres"
                            placeholder="Ingrese su nombre completo"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="usuario"
                            id="usuario"
                            placeholder="Ingrese nombre de usuario"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            name="contraseña"
                            id="contraseña"
                            placeholder="Ingrese su contraseña"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                        type="submit" 
                        name="registrar"
                        class="btn btn-primary form-control">
                    </div>
                </form>
        </div>
    </div>
</section>
</body>   
