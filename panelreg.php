<?php    
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
        header('Content-Type: text/html; charset=utf-8');
    }
    else{
        echo '<script>alert("usted no esta registrado");</script>';
        echo '<script>window.location="iniciar.php";</script>';
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="fonts.css">
    <script src="https://kit.fontawesome.com/0458944bda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Prueba</title>
</head>

<body>
    <header class="header">
        <div class="container logo-nav-container">
            <a href="#"><img src="img/logo15.png"class="logo1" href="panel.php" alt="Lineax"></a>
            <span class="menu-icon">MENU</span>
        
            <nav class="navigation">
                <ul class="show">
                    <li><a href="iniciar.php">VOLVER</a></li>
                </ul>
            </nav>
        </div>
    </header>


       
</body>
</html>
    
