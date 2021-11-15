<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">CONTACTANOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
        </nav>
        
    </header>
<section>
<div>
    <div>
        <div class="img">
            <div class="container py-lg-3 py-2">
                <div class="row">                         
                    <nav class="navbar navbar-expand nav-1">
                    <ul class="navbar-nav">
                    <h2 class="pt-4 text-white text-center font-weight-bold">QUIÉNES SOMOS</h2>
                </div>
            
            </div>
        </div>
    </div>
</div>
<div class="wrapper mt-5">
    <div class="container my-5">
        <div class="row text-center-md">
            <div class="col-md-12 col-lg-6 p-4 text-muted" id="nosotros">
                <h3 class="mb-5">¿Quiénes Somos?</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sed deleniti sapiente beatae quasi quis quibusdam quod quas saepe quaerat dolor tenetur, corrupti ab exercitationem fugiat eaque distinctio enim tempora. </p>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sed deleniti sapiente beatae quasi quis quibusdam quod quas saepe quaerat dolor tenetur, corrupti ab exercitationem fugiat eaque distinctio enim tempora. </p>
                <a class="btn btn-primary mt-3" style="color:white;">Leer Más</a>
            </div>
            <div class="col-md-12 col-lg-6 p-5">
                <div id="imgP">
                    <img src="img/practica.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
<?php
    include'footer.php';
    ?>
