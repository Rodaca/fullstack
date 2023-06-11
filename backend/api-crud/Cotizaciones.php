<?php
    

    require_once("Config.php");

    class Cotizaciones extends Conexion{
        private $id;
        private $fecha_salida;
        private $hora_salida;
        private $fecha_llegada;
        private $hora_llegada;
        private $id_cliente;
        private $id_empleado;
        

        public function __construct($id=0,$fecha_salida="",$hora_salida="",$fecha_llegada="",$hora_llegada="",$id_cliente="",$id_empleado="",$dbCnx=""){
            parent :: __construct($dbCnx);
            $this->id=$id;
            $this->fecha_salida=$fecha_salida;
            $this->hora_salida=$hora_salida;
            $this->fecha_llegada=$fecha_llegada;
            $this->hora_llegada=$hora_llegada;
            $this->id_cliente=$id_cliente;
            $this->id_empleado=$id_empleado;

        }

        public function insertData(){
            try {
                $stm= $this->dbCnx->prepare("INSERT INTO Cotizaciones(fecha_salida,hora_salida,fecha_llegada,hora_llegada,id_cliente,id_empleado) VALUES(?,?,?,?,?,?)");
                $stm->execute([$this->fecha_salida,$this->hora_salida,$this->fecha_llegada,$this->hora_llegada,$this->id_cliente,$this->id_empleado]);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }




        public function selectAll(){
            try {
                $stm= $this->dbCnx->prepare("SELECT * FROM Cotizaciones;");
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
         * Get the value of fecha_salida
         */ 
        public function getFecha_salida()
        {
                return $this->fecha_salida;
        }

        /**
         * Set the value of fecha_salida
         *
         * @return  self
         */ 
        public function setFecha_salida($fecha_salida)
        {
                $this->fecha_salida = $fecha_salida;

                return $this;
        }

        /**
         * Get the value of hora_salida
         */ 
        public function getHora_salida()
        {
                return $this->hora_salida;
        }

        /**
         * Set the value of hora_salida
         *
         * @return  self
         */ 
        public function setHora_salida($hora_salida)
        {
                $this->hora_salida = $hora_salida;

                return $this;
        }

        /**
         * Get the value of fecha_llegada
         */ 
        public function getFecha_llegada()
        {
                return $this->fecha_llegada;
        }

        /**
         * Set the value of fecha_llegada
         *
         * @return  self
         */ 
        public function setFecha_llegada($fecha_llegada)
        {
                $this->fecha_llegada = $fecha_llegada;

                return $this;
        }

        /**
         * Get the value of hora_llegada
         */ 
        public function getHora_llegada()
        {
                return $this->hora_llegada;
        }

        /**
         * Set the value of hora_llegada
         *
         * @return  self
         */ 
        public function setHora_llegada($hora_llegada)
        {
                $this->hora_llegada = $hora_llegada;

                return $this;
        }

        /**
         * Get the value of id_cliente
         */ 
        public function getId_cliente()
        {
                return $this->id_cliente;
        }

        /**
         * Set the value of id_cliente
         *
         * @return  self
         */ 
        public function setId_cliente($id_cliente)
        {
                $this->id_cliente = $id_cliente;

                return $this;
        }

        /**
         * Get the value of id_empleado
         */ 
        public function getId_empleado()
        {
                return $this->id_empleado;
        }

        /**
         * Set the value of id_empleado
         *
         * @return  self
         */ 
        public function setId_empleado($id_empleado)
        {
                $this->id_empleado = $id_empleado;

                return $this;
        }
    }
    

?>