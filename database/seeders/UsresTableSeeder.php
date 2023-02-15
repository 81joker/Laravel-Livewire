<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nehad Altimimi',
            'email' => 'nehad.al.timimi@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Ahmed Nehad',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Raghed alaabosi',
            'email' => 'raghed@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
