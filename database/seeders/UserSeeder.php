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
        $email      = 'rahim.suleymanov94@gmail.com';
        $name       = 'Rahim Süleymanov';
        $password   = bcrypt(12345678);

        User::create([
            'email'     => $email,
            'name'      => $name,
            'password'  => $password,
        ]);
    }
}
