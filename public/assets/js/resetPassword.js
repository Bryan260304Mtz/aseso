$(function () {
  resetPass("#btnSendEmail", "#resetPassword");
});

function resetPass(btnResetPass, formId) {
  $(btnResetPass).click(function (e) { 
      e.preventDefault();
      var dataForm = $(formId).serialize();
      console.log(dataForm);
      
      $.ajax({
          type: "POST",
          url: "../controllers/ResetPassController.php",
          data: dataForm,
          success: function (response) {
              // Parseamos la respuesta JSON del servidor
              var res = JSON.parse(response);
              
              // Verificamos si fue exitoso o hubo un error
              if (res.status === 'success') {
                  Swal.fire({
                      icon: 'success',
                      title: 'Success',
                      text: res.message,
                  })
              } else {
                  Swal.fire({
                      icon: 'error',
                      title: 'Error',
                      text: res.message,
                  });
              }
          },
          error: function () {
              // Si ocurre un error en la conexión AJAX
              Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Could not process the request. Please try again later.',
              });
          }
      });
  });
}
