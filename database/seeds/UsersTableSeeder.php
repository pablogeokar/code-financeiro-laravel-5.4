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
        //CRIAÇÃO USUÁRIO FAKE COM A ROLE admin
        factory(\CodeFin\User::class, 1)
        ->states('admin')
        ->create([
            'name' => 'Pablo George',
            'email' => 'admin@teste.com',
            'password' => bcrypt('123456')
        ]);

        //CRIAÇÃO USUÁRIO FAKE COM A ROLE client
        factory(\CodeFin\User::class, 1)        
        ->create([
            'name' => 'Usuário Comum',
            'email' => 'teste@teste.com',
            'password' => bcrypt('123456')
        ]);        
    }
}
