<?php
    class ClienteModel{
        // atributo pdo
        private $pdo;
        // metodo constructor
        public function __CONSTRUCT(){
            try {
                // Cadena de conexion
                // localhost, tallerweb, root, sin clave
                $this->pdo = new PDO('mysql:host=localhost;dbname=id17589235_lineax2','id17589235_root','&8Yuuv2z@6laz/L*');
                // configuracion de errores
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                // se ejecuta cada vez que encuentre errores dentro del try
                die($e->getMessage());
            }
        }
        // final del metodo constructor

        // metodo listar
        public function Listar(){
            try {
                // variable array result
                $result = array();
                // variable stm orden sql
                $stm = $this->pdo->prepare("select * from formulario");
                // ejecutar la consulta
                $stm->execute();
                // recorrido por todos los registros
                foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                    // nueva instancia de producto
                    $alm = new Cliente();
                    $alm->__SET('idform',$r->idform);
                    $alm->__SET('nombres',$r->nombres);
                    $alm->__SET('correo',$r->correo);
                    $alm->__SET('mensaje',$r->mensaje);
                    $result[]= $alm;
                }
                // retorna una lista de los registros leidos
                return $result;

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // final metodo listar

        // metodo obtener
        public function Obtener($cod){
            try {
                // variable stm orden sql
                $stm = $this->pdo->prepare("select * from formulario where idform = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
                // lee la consulta y devuelve un resultado a r
                $r = $stm->fetch(PDO::FETCH_OBJ);
                // nueva instancia de producto
                $alm = new Cliente();
                $alm->__SET('idform',$r->idform);
                $alm->__SET('nombres',$r->nombres);
                $alm->__SET('correo',$r->correo);
                $alm->__SET('mensaje',$r->mensaje);
                return $alm;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        //final metodo obtener

        //metodo eliminar
        public function Eliminar($cod){
            try {
                // variable stm orden sql
                $stm = $this->pdo->prepare("delete from formulario where idform = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // metodo actualizar
        // final metodo actualizar

        // metodo registrar
    }
?>
