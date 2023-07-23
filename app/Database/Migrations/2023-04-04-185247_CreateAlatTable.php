<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAlatTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'nama' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'stok' => [
                'type'              => 'INT',
                'constraint'        => 11
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('alat');
    }

    public function down()
    {
        $this->forge->dropTable('alat');
    }
}
