<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);



require_once('../Cotizaciones.php');
$obj=new Cotizaciones();


$obj->setFecha_salida($_POST['fecha_salida']);
$obj->setHora_salida ($_POST['hora_salida']);
$obj->setFecha_llegada($_POST['fecha_llegada']);
$obj->setHora_llegada($_POST['hora_llegada']);
$obj->setId_cliente($_POST['id_cliente']);
$obj->setId_empleado($_POST['id_empleado']);
$obj->setDescripcion($_POST['descripcion']);


$obj->insertData();

