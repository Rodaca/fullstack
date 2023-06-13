let formCotizaciones = document.querySelector("#formCotizaciones");

formCotizaciones.addEventListener("submit", (e) => {
  window.location.href = '/ruta-de-destino';
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



