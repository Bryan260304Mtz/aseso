$(function () {
    confirmarCorreo("#confirmButton");
});

function confirmarCorreo(btnConfirmar) {
    $(btnConfirmar).click(function () {
        var formData = {
            action: "confirmacion",
            studentData: studentData
        };

        $.ajax({
            type: "POST",
            url: "../controllers/RegisterController.php",
            contentType: "application/json",  // Enviar datos como JSON
            data: JSON.stringify(formData),    // Convertir el objeto en JSON
            success: function (response) {
                console.log("Response from server:", response); // Verifica la respuesta
                try {
                    const res = JSON.parse(response);
                    if (res.estado === "success") {
                        Swal.fire({
                            title: "Éxito",
                            text: "El correo ha sido verificado exitosamente.",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        }).then(() => {
                            window.location.href = "login.php"; // Redirige según sea necesario
                        });
                    } else {
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
                Swal.fire({
                    title: "Error",
                    text: "Ocurrió un error al procesar la solicitud.",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            },
        });
    });
}

function cancelar() {
    Swal.fire({
        title: "Cancelado",
        text: "La verificación ha sido cancelada.",
        icon: "info",
        confirmButtonText: "Aceptar",
    }).then(() => {
        window.location.href = "register.php"; // Cambia según sea necesario
    });
}
