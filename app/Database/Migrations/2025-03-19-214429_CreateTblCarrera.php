<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblCarrera extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_carrera' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre'     => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addPrimaryKey('Id_carrera');
        $this->forge->createTable('tbl_carrera');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_carrera');
    }
}
