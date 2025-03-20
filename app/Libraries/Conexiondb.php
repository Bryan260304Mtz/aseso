<?php

namespace App\Config;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Config;

class Conexiondb
{
    protected $db;

    public function __construct()
    {
        $this->db = Config::connect(); // Conectar a la base de datos
    }

    public function getConexion()
    {
        return $this->db;
    }
}
