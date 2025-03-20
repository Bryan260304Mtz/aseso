<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_Admin' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Id_Person' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('Id_Admin');
        $this->forge->addForeignKey('Id_Person', 'tbl_persons', 'id_Person', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_admin');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_admin');
    }
}
