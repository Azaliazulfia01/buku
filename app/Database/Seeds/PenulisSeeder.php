<?php

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     'name' => 'Tomy Syafrudin',
        //     'address' => 'Jl Gus Dur no 150 Jombang',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now()
        // ];

        $data = [
            [
                'name' => 'JK Rowling',
                'address' => 'Jl Gus Dur no 150 Jombang',
                'tanggal_lahir' => '1965-07-13',
                'email_penulis' => 'jkrowling@gmail.com'
            ],
            [
                'name' => 'Zephira Lune',
                'address' => 'Jl Merdeka no 45 Surabaya',
                'tanggal_lahir' => '1988-11-03',
                'email_penulis' => 'zephi@gmail.com'
            ],
            [
                'name' => 'Joanne Rowling Kathleen',
                'address' => 'Jl Kebon Jeruk no 10 Jakarta',
                'tanggal_lahir' => '1990-05-20', 
                'email_penulis' => 'jrkathleen01@gmail.com'
            ],   
        ];
        
    $faker = \Faker\Factory::create('id_ID');
    for ($i = 0; $i < 100; $i++) {

    $data = [
        'name'           => $faker->name,
        'address'        => $faker->address,
        'tanggal_lahir'  => $faker->date('Y-m-d', '2000-12-31'),
        'email_penulis'  => $faker->unique()->safeEmail,
        'created_at'     => Time::createFromTimestamp($faker->unixTime()),
        'updated_at'     => Time::now()
    ];

    $this->db->table('penulis')->insert($data);
}