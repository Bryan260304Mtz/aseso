<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAsistencia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'asesoria_id'   => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'alumno_id'     => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
            ],
            'fecha'         => [
                'type'       => 'DATE',
            ],
            'estado'        => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('asesoria_id', 'tbl_asesoria', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('alumno_id', 'tbl_alumno', 'Id_Student', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_asistencia');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_asistencia');
    }
}
