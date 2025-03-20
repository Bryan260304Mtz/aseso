<?php

namespace App\Models;

use App\Config\Conexiondb;
  class LoginModel
  {  protected $db;

    public function __construct()
    {
        $conexion = new Conexiondb();
        $this->db = $conexion->getConexion(); // Obtiene la conexión
    }
    
    public function loginTeacher($teacherId, $teacherPassword)
    {
        $query = $this->db->query(
            "SELECT Teacher_id, Password FROM docentes WHERE Teacher_id = ? AND Password = ?",
            [$teacherId, $teacherPassword]
        );

        return $query->getRow(); // Retorna una sola fila
    }

    function loginStudent($studentId, $studentPassword)
    {
        $query = $this->db->query("SELECT a.Student_Id, a.Password FROM alumnos a WHERE a.Student_Id = ? AND a.Password = ?",
        [$studentId, $studentPassword]);
        
        return $query->getRow();
    }

    function loginAdmin($adminId, $adminPassword)
    {
        $query = $this->db->query("SELECT a.id_admin, a.Password FROM admin a WHERE a.id_admin = ? AND a.Password = ?",
        [$adminId, $adminPassword]);
        
        return $query->getRow();
    }
  }
