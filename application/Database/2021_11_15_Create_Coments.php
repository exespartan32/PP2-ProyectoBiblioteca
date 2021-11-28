<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_Create_Coments extends Migration{
    public function up()    {
        $this->forge->addField([
            'id_comentario'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => '18',
            ],
            'apellido' => [
                'type'       => 'VARCHAR',
                'constraint' => '18',
            ],
            'comentario' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],

        ]);
        $this->forge->addKey('blog_id', true);
        $this->forge->createTable('comentarios');
    }

    public function down()    {
        $this->forge->dropTable('comentarios');
    }
}