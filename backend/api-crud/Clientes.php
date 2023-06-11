<?php
    

    require_once("Config.php");

    class Clientes extends Conexion{
        private $id;
        private $nombre;
        

        public function __construct($id=0,$nombre="",$dbCnx=""){
            parent :: __construct($dbCnx);
            $this->id=$id;
            $this->nombre=$nombre;

        }






        public function selectAll(){
            try {
                $stm= $this->dbCnx->prepare("SELECT * FROM clientes;");
                $stm->execute();
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        

        
    }
    

?>