<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Joan Salmoral Parramon',
            'email'     => 'jsalmoralp@gmail.com',
            'password'  => bcrypt('contraseña')
        ])->assignRole('Admin');

        User::factory(20)->create();
    }
}
