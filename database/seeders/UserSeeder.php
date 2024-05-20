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
            'first_name' => 'Orxan',
            'last_name' => 'Ismayılov',
            'email' => 'orxanismayilov851@gmail.com',
            'password' => bcrypt('Admin!123'),
            'bio' =>    'Backend PHP/Laravel Developer kimi e-ticarət, blog, cms və s. Platformaları üçün
                        yüksək keyfiyyətli və davamlı proqram təminatının işlənib hazırlanmasında
                        təcrübəm var.
                        PHP, Laravel, JavaScript-də texniki biliklərim, problem həll etmə
                        bacarıqlarım və komanda ilə əməkdaşlıq bacarıqlarımla birlikdə sistemin
                        səmərəliliyi və istifadəçi cəlb edilməsində əhəmiyyətli rolum var',
            'phone' => '055-878-37-00',
            'address' => 'Azerbaijan, Baku Nəsimi rayon Mustafa Topçubaşov 21A',
            'instagram' => 'https://www.instagram.com/_orkhan_rg_/',
            'facebook' => 'https://www.facebook.com/profile.php?id=100010973659122',
            'x' => 'https://x.com/',
        ]);
    }
}
