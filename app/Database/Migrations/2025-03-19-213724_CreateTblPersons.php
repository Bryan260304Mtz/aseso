<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblPersons extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_Person'            => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'          => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'surname'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email'         => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'numberPhone'   => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addPrimaryKey('id_Person');
        $this->forge->createTable('tbl_persons');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_persons');
    }
}
