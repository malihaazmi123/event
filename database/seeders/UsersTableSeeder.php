<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234'),
            'phonenumber'=>'01614345658',
            'gender'=>'female',
            //'date'=>'12/23/2021 03:57 PM',
            'role'=>'admin'
             
        ]);
    }
}
