<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);



require_once('../Detalles.php');
$obj=new Detalles();


$obj->setId_cotizacion($_POST['id_cotizacion']);
$obj->setId_producto ($_POST['id_producto']);
$obj->setCantidad($_POST['cantidad']);



$obj->insertData();

