<?php
    

    require_once("Config.php");

    class Empleados extends Conexion{
        private $id;
        private $usuario;
        private $contrasena;
        

        public function __construct($id=0,$usuario="",$contrasena="",$dbCnx=""){
            parent :: __construct($dbCnx);
            $this->id=$id;
            $this->usuario=$usuario;
            $this->contrasena=$contrasena;

        }






        public function selectAll(){
            try {
                $stm= $this->dbCnx->prepare("SELECT * FROM empleados;");
                $stm->execute();
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        

        
    }
    

?>