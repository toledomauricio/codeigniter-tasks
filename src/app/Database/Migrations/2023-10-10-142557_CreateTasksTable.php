<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'description' => [
                'type'           => 'TEXT',
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['pending', 'approved', 'canceled'],
                'default'        => 'pending',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        //
    }
}
