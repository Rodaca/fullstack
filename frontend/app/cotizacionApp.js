let formCotizaciones = document.querySelector("#formCotizaciones");
let myHeader = new Headers({ "Content-Type": "application/json" }) 

formCotizaciones.addEventListener("submit", (e) => {
    e.preventDefault();
    let data = new FormData(e.target);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../backend/api-crud/cotizaciones/insertar.php", true);
    
    xhr.onload = function() {
        if (xhr.status === 200) {
          // La solicitud se completó con éxito
          console.log(xhr.responseText);
          alert('Se creo la cotizacion porfavor ingrese los detalles');
        } else {
          // Ocurrió un error durante la solicitud
          console.error("Error al enviar los datos");
        }
    };
    
    xhr.send(data);

});
/* <?php
    require_once ('../../app.php');
    use Models\Ciudades;
    $miCiudad = new Ciudades();
    header("Content-Type: application/json"); //definimos el archivo como un tipo json
    //le decimos al archivo de php que obtenga cualquier tipo de entrada que le llegue y la transformamos a un 
    //array asociativo con el parametro "true", sin este parametro seria un objeto por defecto
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $miCiudad->saveData($_DATA);  
?> */