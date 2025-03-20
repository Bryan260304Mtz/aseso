$(function () {
    registrar("#btnRegisterStudent", "#StudentRegister", "student");
    registrar("#btnRegisterTeacher", "#TeacherRegister", "teacher");
  });
  
  function registrar(btnRegistrar, formId, formType) {
    $(btnRegistrar).click(function (event) {
        event.preventDefault();
        var formData = $(formId).serialize();
        console.log(formData);
        
        Swal.fire({
            title: "Procesando...",
            text: "Por favor, espere mientras se procesa su solicitud",
            icon: "info",
            allowOutsideClick: false,
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
  
        $.ajax({
            type: "POST",
            url: baseUrl+'register/register',
            data: formData,
            success: function (response) {
                console.log("Response from server:", response);
                
                Swal.close(); 
  
                try {
                    const res = JSON.parse(response);
                    if (res.estado === "success") {
                        Swal.fire({
                            title: "Éxito",
                            text: res.message,
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        }).then(() => {
                            location.reload();
                        });
                    } else if (res.estado === "error") {
                        Swal.fire({
                            title: "Error",
                            text: res.message,
                            icon: "error",
                            confirmButtonText: "Aceptar",
                        });
                    }
                } catch (e) {
                    Swal.fire({
                        title: "Error",
                        text: "Error al procesar la respuesta del servidor.",
                        icon: "error",
                        confirmButtonText: "Aceptar",
                    });
                }
            },
            error: function () {
                Swal.close();
                Swal.fire({
                    title: "Error",
                    text: "Hubo un problema al procesar la solicitud.",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        });
    });
  }
  
  function togglePassword(inputId) {
    const passwordField = document.getElementById(inputId);
    const eyeIcon = inputId === 'studentPassword' ? document.getElementById('eyeIcon1') : document.getElementById('eyeIcon2');
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
  }
  