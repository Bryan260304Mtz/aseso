$(function () {
  login("#btnAdminLogin", "#adminLogin", "admin");
  login("#btnTeacherLogin", "#teacherLogin", "teacher");
  login("#btnStudentLogin", "#studentLogin", "student");
});

function login(btnLogin, formId, formType) {
  $(btnLogin).click(function (event) {
    event.preventDefault();
    
    var formData = $(formId).serialize();
    console.log("Datos enviados:", formData);

    $.ajax({
      type: "POST",
      url: baseUrl + 'login/login',
      data: formData,
      dataType: "json",  // Esperamos un JSON ya parseado
      success: function (res) {
        console.log("Respuesta del servidor:", res);

        if (res.status === "success") {
          Swal.fire({
            title: "Éxito",
            text: res.message,
            icon: "success",
            confirmButtonText: "Aceptar",
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = res.redirect;
            }
          });
        } else {
          Swal.fire({
            title: "Error",
            text: res.message,
            icon: "error",
            confirmButtonText: "Aceptar",
          });
        }
      },
      error: function (xhr, status, error) {
        console.error("Error AJAX:", status, error);
        Swal.fire({
          title: "Error",
          text: "Ocurrió un error en la petición.",
          icon: "error",
          confirmButtonText: "Aceptar",
        });
      }
    });
  });
}
