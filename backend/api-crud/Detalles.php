<?php
    

    require_once("Config.php");

    class Detalles extends Conexion{
        private $id;
        private $cantidad;
        private $id_cotizacion;
        private $id_producto;
        

        public function __construct($id=0,$cantidad="",$id_cotizacion="",$id_producto="",$dbCnx=""){
            parent :: __construct($dbCnx);
            $this->id=$id;
            $this->cantidad=$cantidad;
            $this->id_cotizacion=$id_cotizacion;
            $this->id_producto=$id_producto;

        }



        public function insertData(){
            try {
                $stm= $this->dbCnx->prepare("INSERT INTO detalles(cantidad,id_cotizacion,id_producto) VALUES(?,?,?)");
                $stm->execute([$this->cantidad,$this->id_cotizacion,$this->id_producto]);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function selectAll(){
            try {
                $stm= $this->dbCnx->prepare("SELECT * FROM detalles;");
                $stm->execute();
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of id_cotizacion
         */ 
        public function getId_cotizacion()
        {
                return $this->id_cotizacion;
        }

        /**
         * Set the value of id_cotizacion
         *
         * @return  self
         */ 
        public function setId_cotizacion($id_cotizacion)
        {
                $this->id_cotizacion = $id_cotizacion;

                return $this;
        }

        /**
         * Get the value of id_producto
         */ 
        public function getId_producto()
        {
                return $this->id_producto;
        }

        /**
         * Set the value of id_producto
         *
         * @return  self
         */ 
        public function setId_producto($id_producto)
        {
                $this->id_producto = $id_producto;

                return $this;
        }
    }
    

?>