
<?php    
    include'conexion.php';
    if(isset($_SESSION['usuario'])){
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header class="header">
        
        <div class="container logo-nav-container">
            <a href="#"><img src="img/logo15.png"class="logo1"alt=""></a>
            <span class="menu-icon">MENU</span>
        
            <nav class="navigation">
                <ul class="show">
                    <li><a class="btn btn-outline-light btn-sm" href="iniciar.php" style="color:white;">CERRAR SESIÓN</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">
                        Panel Principal
                    </h2>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/Form.jpg" 
                        alt="productos"
                        class="img-fluid rounded-circle img-thumbnail my-2" width="100%">
                    <a href="resulform.php" 
                        class="btn btn-outline-info form-control text-center">
                        Resultados Formulario
                    </a>
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>
