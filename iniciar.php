<?php
    include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
        function onSubmit(token) {
        document.getElementById("demo-form").submit();
        }
    </script>
</head>

<body>
<header>
</header>
<section>
    <div class="cajaimg ">
        <img src="img/11e.jpg" width="100%" height="500em">
    </div> 
    <br>
</section>
<section>
    <div class="container">
    
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron">
                    <h3>¿Qué ofrecemos?</h3>
                    <p>En Lineax nos encargamos de que la entrega de tus productos sean con el mejor protocolo de seguridad.
                    Puedes echarle un vistazo a los productos nuevos en ropas y accesorios echos con los mejores materiales del mercado para tu comodidad en tu dia a dia.</p> 
                </div>
            </div>
            
              <div class="col-md-4">
                <h3>Iniciar Sesión</h3>
                <form method="post" action="validar.php">
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
                    <button class="g-recaptcha" 
                        data-sitekey="6LcSyfYcAAAAAPE0enJ7lC1NMJ3JqKVw-YVrTZiL" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="iniciar sesion"
                            name="iniciar"
                            class="btn btn-primary form-control">
                    </div>
                    <div class="form-group">
                        <a href="registro.php" class="btn btn-success form-control">Regsitra Nuevo</a>
                    </div>
                </form>
        </div>
    </div>
</section>   
</body>
