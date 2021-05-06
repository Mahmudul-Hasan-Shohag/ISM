<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
'username'=>'Mahmudul Hasan',
'email'=>'mhs331269@gmail.com',
'password'=>bcrypt('abc123'),
'role'=>'admin'
        ]);
    }
}
