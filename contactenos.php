
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="fonts.css">
    <script src="https://kit.fontawesome.com/0458944bda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contactenos</title>
</head>
<body>
    <header class="header">
            <div class="container logo-nav-container">
                <a href="#"><img src="img/logo15.png" class="logo1" alt=""></a>
                <span class="menu-icon">MENU</span>
            
                <nav class="navigation">
                    <ul class="show">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="acerca.php">Acerca</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="contactenos.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    <div class="container-fluid p-0 mb-5 ">
        <div class="palaxIn" > 
            <div class="container py-lg-3 py-2">
                <div class="row">                         
                    <nav class="navbar navbar-expand nav-1"></nav>
                    <h2 class="pt-4 text-white text-center font-weight-bold">CONTÁCTANOS PARA AYUDARTE</h2>
                </div>
                
            </div>
        </div>
    </div>

    <section class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
                        <form class="contact-form-wrapper" data-toggle="validator" action="insertform.php" method="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="pt-4 form-group">
                                        <label>Nombres y apellidos <span class="font10 text-danger">(requerido)</span></label>
                                        <input id="nombres" name="nombres" type="text" class=" form-control" data-error="Tu nombre es obligatorio" required>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                    <div class="col-sm-6">
                                        <div class="pt-4 form-group">
                                            <label>Tu Correo Electrónico <span class="font10 text-danger">(requerido)</span></label>
                                            <input id="correo" name="correo" type="email" class="form-control" data-error="Tu correo es obligatorio y verificado por Correo Electrónico" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Mensaje <span class="font10 text-danger">(requerido)</span></label>
                                            <textarea id="mensaje" name="mensaje" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                            <button type="submit" name="register" class="btn btn-primary">Enviar Mensaje</button>
                                    </div>
                            </div>    
                        </form>
                            
                    </div>
                    
                    <div class=" sa col-md-4">
                        <p class="colo pt-4 font-weight-bold">Dirección</p>
                        <div>
                            <p class="brr">Lima,Perú</p>
                        </div>
                        <div>
                        <p class="colo font-weight-bold">Correo Electrónico</p>
                        <p class= "brr">asdasd@gmail.com</p>
                        </div>

                        <div>
                        <p class="colo font-weight-bold">Teléfono</p>
                        <p class=" brr">123456789</p>
                        </div>

                        <div>
                        <p class="colo font-weight-bold">Redes Sociales</p>
                        </div>
                        <div class="pt-3 d-flex justify-content-start">
                            <ul class="social-icons margin-top-20 nav">
                                <li class="ml-auto facebook4">
                                    <a class="nav-link"  href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="instagram4">
                                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="google-plus4">
                                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>                      
                    </div>
                </div>   
    </section>
    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
    <?php
        include'footer.php';
        include'conexion.php';
    ?>
</body>
</html>
