<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Orxan',
            'surname' => 'Ismayılov',
            'email' => 'orxanismayilov851@gmail.com',
            'password' => bcrypt('Admin!123'),
        ]);
    }
}
