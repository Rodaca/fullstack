<?php 
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    require_once('../backend/models/Clientes.php');
    $objClientes= new Clientes();
    $allClientes=$objClientes->selectAll();
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

    <form class="w-100" action="">
    


    </form>
    <div class="card w-75">
        <div class="card-header">
            Cotizacion
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Fecha y hora de salida</span>
                    </div>
                    <input type="date" class="form-control">
                    <input type="time" class="form-control">
                </div>
            </li>
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Fecha y hora de entrada</span>
                    </div>
                    <input type="date" class="form-control">
                    <input type="time" class="form-control">
                </div>
            </li>
            <li class="list-group-item">
            <div class="input-group mb-3">
                <select class="custom-select w-75" id="inputGroupSelect1">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect1">Empleados</label>
                </div>
            </div>
            </li>
            <li class="list-group-item">
                <div class="input-group mb-3">
                    <select class="custom-select w-75" id="inputGroupSelect2">
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
                <button type="button" class="btn btn btn-success">Enviar</button>
            </li>
        </ul>
    </div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>