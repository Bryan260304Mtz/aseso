<?php

namespace App\Controllers;

use Exception;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;
use LoginModel as GlobalLoginModel;

class Account extends BaseController
{
    ///////////LOGIN//////////////////

    public function loginView()
    {
        return view('login/login');
    }
    public function login()
    {
        $request = service('request');
        $loginModel = new LoginModel();
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!isset($_POST['formType'])) {
                    echo json_encode(["status" => "error", "message" => "Tipo de formulario no especificado"], JSON_UNESCAPED_UNICODE);
                    return;
                }

                $formType = $_POST['formType'];
                $redirectUrl = "";
                //Stuent
                if ($formType === 'student') {
                    $studentId = $_POST['studentId'];
                    $studentPassword = $_POST['studentPassword'];

                    if (empty($studentId) || empty($studentPassword)) {
                        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios"], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    $result = $loginModel->loginStudent($studentId, $studentPassword);
                    if ($result) {
                        $redirectUrl = "asesorias.php";
                        echo json_encode(["status" => "success", "message" => "Login exitoso", "redirect" => $redirectUrl], JSON_UNESCAPED_UNICODE);
                    } else {
                        echo json_encode(["status" => "error", "message" => "Credenciales incorrectas"], JSON_UNESCAPED_UNICODE);
                    }
                }
                //Teacher 
                elseif ($formType === 'teacher') {
                    $teacherId = $_POST['teacherId'];
                    $teacherPassword = $_POST['teacherPassword'];

                    if (empty($teacherId) || empty($teacherPassword)) {
                        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios"], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    $result = $loginModel->loginTeacher($teacherId, $teacherPassword);
                    if ($result) {
                        $redirectUrl = "ver_asistencias.php";
                        echo json_encode(["status" => "success", "message" => "Login exitoso", "redirect" => $redirectUrl], JSON_UNESCAPED_UNICODE);
                    } else {
                        echo json_encode(["status" => "error", "message" => "Credenciales incorrectas"], JSON_UNESCAPED_UNICODE);
                    }
                }
                //Admin
                elseif ($formType === 'admin') {
                    $adminId = $_POST['adminId'];
                    $adminPassword = $_POST['adminPassword'];

                    if (empty($adminId) || empty($adminPassword)) {
                        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios"], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    $result = $loginModel->loginAdmin($adminId, $adminPassword);
                    if ($result) {
                        $redirectUrl = "admin.php";
                        echo json_encode(["status" => "success", "message" => "Login exitoso", "redirect" => $redirectUrl], JSON_UNESCAPED_UNICODE);
                    } else {
                        echo json_encode(["status" => "error", "message" => "Credenciales incorrectas"], JSON_UNESCAPED_UNICODE);
                    }
                }
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Ocurrió un error: " . $e->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }
    //////////////////////////////////////

    public function registerView(){
        return view('register/register');
    }

    public function register()
    {
        if ($_POST) {

            $formType = $_POST['formType'];
            if ($formType == 'student') {
                
                $studentName = $_POST['studentName'];
                $studentSurname = $_POST['studentSurname'];
                $studentId = $_POST['studentId'];
                $studentGroup = $_POST['studentGroup'];
                $studentPhone = $_POST['studentPhone'];
                $studentPassword = $_POST['studentPassword'];
                $studentConfirmPassword = $_POST['studentConfirmPassword'];
                $studentEmail = $_POST['studentEmail'];
            
                var_dump($_POST);
                exit();
            }

            if ($formType == 'teacher') {
                $teacherId = $_POST['teacherId'];
                $teacherName = $_POST['teacherName'];
                $teacherSurname = $_POST['teacherSurname'];
                $teacherEmail = $_POST['teacherEmail'];
                $teacherPassword = $_POST['teacherPassword'];
                $teacherPasswordConfirm = $_POST['teacherConfirmPassword'];
                $teacherPhone = $_POST['teacherPhone'];
                var_dump($_POST);
                exit();
            }
        }
    }
}
