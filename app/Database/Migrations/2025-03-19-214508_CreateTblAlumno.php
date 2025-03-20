<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAlumno extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_Student'    => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Id_Person'     => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'id_Carrera'    => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'grupo'         => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addPrimaryKey('Id_Student');
        $this->forge->addForeignKey('Id_Person', 'tbl_persons', 'id_Person', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_Carrera', 'tbl_carrera', 'Id_carrera', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_alumno');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_alumno');
    }
}
