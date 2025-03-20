<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblTeachers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_Teacher'    => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Id_Person'     => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('Id_Teacher');
        $this->forge->addForeignKey('Id_Person', 'tbl_persons', 'id_Person', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_teachers');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_teachers');
    }
}
