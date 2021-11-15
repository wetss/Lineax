<?php 
  //incluir los archivos 
  //producto.entidad.php 
  //producto.model.php

  require_once 'cliente.entidad.php';
  require_once 'cliente.model.php';

  $alm = new Cliente();
  $model = new ClienteModel();

  if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']) {
        case 'actualizar':
            $alm->__SET('idform',$_REQUEST['idform']);
            $alm->__SET('nombre',$_REQUEST['nombres']);
            $alm->__SET('correo',$_REQUEST['correo']);
            $alm->__SET('mensaje',$_REQUEST['mensaje']);
            $model->Actualizar($alm);
            header('Location: resulform.php');
            break;
        case 'eliminar':
            $model->Eliminar($_REQUEST['idform']);
            header('Location: resulform.php');
            break;
    }
  }  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bievenidos</title>
     <!-- link bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/estilo.css">
    <!-- script -->
    <script src="js/boostrap.min.js"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="paneladmin.php">VOLVER <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>
    <br>
    <br>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Resultados</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <table class="table table-condensed"> 
                    <thead>
                        <tr>
                            <th>idform</th>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($model->Listar() as $r): 
                    ?>
                    <tr>
                        <td>
                            <?php echo $r->__GET('idform'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('nombres'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('correo'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('mensaje'); ?>
                        </td>
                        <td>
                            <a href="?action=eliminar&idform=<?php echo $r->idform; ?>">
                                Eliminar
                            </a>                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
