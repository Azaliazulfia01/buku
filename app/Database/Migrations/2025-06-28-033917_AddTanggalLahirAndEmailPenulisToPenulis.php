<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTanggalLahirAndEmailPenulisToPenulis extends Migration
{
    public function up()
    {
        $this->forge->addColumn('penulis', [
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true,
                'after' => 'name'
            ],
            'email_penulis' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'tanggal_lahir'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('penulis', ['tanggal_lahir', 'email_penulis']);
    }
}
