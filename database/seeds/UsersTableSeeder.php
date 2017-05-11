<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeFin\User::class, 1)
        ->states('admin')
        ->create([
            'name' => 'Pablo George',
            'email' => 'admin@teste.com',
            'password' => bcrypt('123456')
        ]);
    }
}
