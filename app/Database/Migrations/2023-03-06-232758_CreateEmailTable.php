<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmailTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sender_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'receiver_email' => [
                'type' => 'TEXT',
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('email');
    }

    public function down()
    {
        $this->forge->dropTable('email');
    }
}