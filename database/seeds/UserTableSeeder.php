<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::created([
            'name' => 'Admin',
            'email' => 'admin@ra.com.br',
            'password' => bcrypt('Admin123')
        ]);
    }
}
