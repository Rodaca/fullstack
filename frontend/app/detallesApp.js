let formDetalles = document.querySelector("#formDetalles");

formDetalles.addEventListener("submit", (e) => {
  e.preventDefault();
  let data = new FormData(e.target);
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../backend/api-crud/detalles/insertar.php", true);
  
  xhr.onload = function() {
      if (xhr.status === 200) {
        // La solicitud se completó con éxito
        console.log(xhr.responseText);
        alert('Se a agregado un producto a la cotizacion');
      } else {
        // Ocurrió un error durante la solicitud
        console.error("Error al enviar los datos");
      }
  };
  
  xhr.send(data);
  window.location.reload(true);
});
