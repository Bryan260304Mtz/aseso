<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAsesoria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Id_Teacher'  => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
            ],
            'nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'dia_semana'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'hora_inicio'  => [
                'type'       => 'TIME',
            ],
            'hora_fin'     => [
                'type'       => 'TIME',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('Id_Teacher', 'tbl_teachers', 'Id_Teacher', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_asesoria');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_asesoria');
    }
}
