<?php 
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    require_once('../backend/api-crud/Clientes.php');
    $objClientes= new Clientes();
    $allClientes=$objClientes->selectAll();

    require_once('../backend/api-crud/Empleados.php');
    $objEmpleados= new Empleados();
    $allEmpleados=$objEmpleados->selectAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    
    <!-- acordeon -->
    <div class="accordion w-50" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Cotizar
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <!-- formulario de cotizacin -->
                <form class="" id="formCotizaciones" action="">
                    <div class="card w-100">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Fecha y hora de salida</span>
                                    </div>
                                    <input name="fecha_salida" type="date" class="form-control">
                                    <input name="hora_salida" type="time" class="form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Fecha y hora de entrada</span>
                                    </div>
                                    <input name="fecha_llegada" type="date" class="form-control">
                                    <input name="hora_llegada" type="time" class="form-control">
                                </div>
                            </li>
                            <li class="list-group-item">
                            <div class="input-group mb-3">
                                <select class="custom-select w-75" name="id_cliente" id="inputGroupSelect1">
                                        <option selected>Selecciones</option>
                                        <?php foreach ($allEmpleados as $key => $value) {?>
                                            <option value="<?php echo $value['id']?>"><?php echo $value['usuario']?></option>
                                        <?php }?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect1">Empleados</label>
                                </div>
                            </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <select class="custom-select w-75" name="id_empleado" id="inputGroupSelect2">
                                        <option selected>Selecciones</option>
                                        <?php foreach ($allClientes as $key => $value) {?>
                                            <option value="<?php echo $value['id']?>"><?php echo $value['nombre']?></option>
                                        <?php }?>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect2">Clientes</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" class="btn btn btn-success">Enviar</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Agregar productos
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <!-- Formulario para detalles -->
                <form class="" id="formCotizaciones" action="">
                    <div class="card w-100">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                            <div class="input-group mb-3">
                                <select class="custom-select w-75" name="id_cotizacion" id="inputGroupSelect1">
                                        <option selected>Selecciones</option>
                                        <?php foreach ($allEmpleados as $key => $value) {?>
                                            <option value="<?php echo $value['id']?>"><?php echo $value['usuario']?></option>
                                        <?php }?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect1">Cotizaciones</label>
                                </div>
                            </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <select class="custom-select w-75" name="id_producto" id="inputGroupSelect2">
                                        <option selected>Selecciones</option>
                                        <?php foreach ($allClientes as $key => $value) {?>
                                            <option value="<?php echo $value['id']?>"><?php echo $value['nombre']?></option>
                                        <?php }?>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect2">Productos</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Producto</span>
                                    </div>
                                    <input name="cantida" type="number" class="form-control">
                                    
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" class="btn btn btn-success">Enviar</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Accordion Item #3
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="app/cotizacionApp.js"></script>
</body>
</html>