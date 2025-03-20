$(document).ready(function () {
  // Realizar la solicitud AJAX al cargar la página
  $.ajax({
    url: "../controllers/obtenerSolicitudes.php", // Archivo PHP para obtener las solicitudes
    method: "GET",
    dataType: "json",
    success: function (response) {
      if (response.estado === "success" && response.data.length > 0) {
        // Limpia la lista de solicitudes
        $("#solicitudes-list").empty();

        // Iterar sobre todas las solicitudes y crear elementos
        response.data.forEach(function (solicitud) {
          $("#solicitudes-list").append(`
                      <div class="solicitud" 
                          data-id="${solicitud.teacherId}" 
                          data-name="${solicitud.teacherName}" 
                          data-surname="${solicitud.teacherSurname}" 
                          data-email="${solicitud.teacherEmail}" 
                          data-password="${solicitud.teacherPassword}" 
                          data-phone="${solicitud.teacherPhone}">
                          <div class="d-flex justify-content-between mb-3">
                              <p class="mb-0"><strong>Nombre:</strong> ${solicitud.teacherName}</p>
                              <button class="btn btn-detalles">Ver Detalles</button>
                          </div>
                          <div class="button-group">
                              <button class="btn btn-custom me-2 btn-aprobar">
                                  <span>✔ Aceptar</span>
                              </button>
                              <button class="btn btn-custom btn-cancelar">
                                  <span>✖ Rechazar</span>
                              </button>
                          </div>
                          <div class="detalles-section">
                              <p><strong>Apellido:</strong> ${solicitud.teacherSurname}</p>
                              <p><strong>ID:</strong> ${solicitud.teacherId}</p>
                              <p><strong>Email:</strong> ${solicitud.teacherEmail}</p>
                              <p><strong>Pass:</strong> ${solicitud.teacherPassword}</p>
                              <p><strong>Teléfono:</strong> ${solicitud.teacherPhone}</p>
                          </div>
                      </div>
                  `);
        });
      } else {
        // Si no hay solicitudes, puedes mostrar un mensaje dentro del modal
        $("#solicitudes-list").append(`<p>No hay solicitudes de registro.</p>`);
      }
    },
  });

  // Mostrar detalles al presionar el botón de detalles
  $(document).on("click", ".btn-detalles", function () {
    $(this).closest(".solicitud").find(".detalles-section").toggle();
  });

  // Aprobar solicitud
  $(document).on("click", ".btn-aprobar", function () {
    const solicitudDiv = $(this).closest(".solicitud");
    const solicitudId = solicitudDiv.data("id");
    const teacherName = solicitudDiv.data("name");
    const teacherSurname = solicitudDiv.data("surname");
    const teacherEmail = solicitudDiv.data("email");
    const teacherPassword = solicitudDiv.data("password");
    const teacherPhone = solicitudDiv.data("phone");

    Swal.fire({
      title: "Procesando...",
      text: "Por favor, espere mientras se procesa su solicitud",
      icon: "info",
      allowOutsideClick: false,
      showConfirmButton: false,
      didOpen: () => {
        Swal.showLoading();
      },
    });

    // Realizar la llamada AJAX para aprobar la solicitud
    $.ajax({
      url: "../controllers/aprobarSolicitud.php",
      method: "POST",
      data: {
        id: solicitudId,
        name: teacherName,
        surname: teacherSurname,
        email: teacherEmail,
        password: teacherPassword,
        phone: teacherPhone,
      },
      dataType: "json",
      success: function (response) {
        console.log("Response from server:", response);
        Swal.close();

        if (response && response.estado === "success") {
          Swal.fire({
            title: "Éxito",
            text: response.mensaje,
            icon: "success",
            confirmButtonText: "Aceptar",
          }).then((result) => {
            if (result.isConfirmed) {
              solicitudDiv.remove(); // Elimina la solicitud de la interfaz
              // location.reload(); // Descomentar para recargar la página si es necesario
            }
          });
        } else {
          Swal.fire({
            title: "Error",
            text: response.mensaje || "No se pudo aprobar la solicitud.",
            icon: "error",
            confirmButtonText: "Aceptar",
          });
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en AJAX:", textStatus, errorThrown);
        Swal.fire({
          title: "Error",
          text: "Hubo un problema en la conexión.",
          icon: "error",
          confirmButtonText: "Aceptar",
        });
      },
    });
  });
  // Cancelar solicitud
  $(document).on("click", ".btn-cancelar", function () {
    const solicitudDiv = $(this).closest(".solicitud");
    const solicitudId = solicitudDiv.data("id");

    // Realizar la llamada AJAX para cancelar la solicitud
    $.ajax({
      url: "../controllers/cancelarSolicitud.php",
      method: "POST",
      data: {
        id: solicitudId,
      },
      dataType: "json",
      success: function (response) {
        if (response.estado === "success") {
          Swal.fire({
            title: "Éxito",
            text: response.mensaje,
            icon: "success",
            confirmButtonText: "Aceptar",
          });
          // Eliminar la solicitud del modal
          $(`.solicitud[data-id="${solicitudId}"]`).remove();
        } else {
          Swal.fire({
            title: "Error",
            text: response.mensaje,
            icon: "error",
            confirmButtonText: "Aceptar",
          });
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en AJAX:", textStatus, errorThrown);
        Swal.fire({
          title: "Error",
          text: "Hubo un problema en la conexión.",
          icon: "error",
          confirmButtonText: "Aceptar",
        });
      },
    });
  });
});
