<?php
    

    require_once("Config.php");

    class Productos extends Conexion{
        private $id;
        private $nombre;
        private $precio_dia;
        

        public function __construct($id=0,$nombre="",$precio_dia="",$dbCnx=""){
            parent :: __construct($dbCnx);
            $this->id=$id;
            $this->nombre=$nombre;
            $this->precio_dia=$precio_dia;

        }






        public function selectAll(){
            try {
                $stm= $this->dbCnx->prepare("SELECT * FROM productos;");
                $stm->execute();
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        

        
    }
    

?>