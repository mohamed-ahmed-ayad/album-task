<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
   
    public function run()
    {
        $user = User::updateOrCreate([
            'email'=>'admin@admin.com',
        ],[
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>'12345678',

        ]);    }
}
