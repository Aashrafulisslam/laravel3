<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('password') ],
            ['name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('password') ],
            ['name'=>'Editor','email'=>'editor@gmail.com','password'=>bcrypt('password')],
            ['name'=>'Author','email'=>'author@gmail.com','password'=>bcrypt('password')],
        ]);
    }
}
