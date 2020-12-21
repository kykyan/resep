<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Tes',
        //     'email' => 'tes@email.com',
        //     'password' => bcrypt('12345678')
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
            'role' => 1
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => bcrypt('12345678'),
            'role' => 2
        ]);
    }
}
