<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enviroment = \App::environment();

        if ($enviroment == 'local')
        {
            $superadmin = \App\Models\User::create([
                    'unit_id' => '0',
                    'username' => 'superadmin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678'),
                ]);

                $superadmin ->assignRole('super-admin');
        }
    }
}
