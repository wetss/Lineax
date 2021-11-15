<?php
    include 'conexion.php';

    if(isset($_POST['registrar'])){
        try{
            $comando = $db->prepare("insert into usuarios(nombres,usuario,contraseña) values(?,?,?)");
            $n = $_POST['nombres'];
            $u = $_POST['usuario'];
            $c = $_POST['contraseña'];

            $comando->bindParam(1,$n);
            $comando->bindParam(2,$u);
            $comando->bindParam(3,$c);

            $comando->execute();

            echo '<script>alert("Usuario registrado");</script>';
            echo '<script>window.location="iniciar.php";</script>';

        }catch (exception $e) {
            die($e->getMessage());
        }
    }
    else{
        echo 'se desconoce el origen';
    }
?>
