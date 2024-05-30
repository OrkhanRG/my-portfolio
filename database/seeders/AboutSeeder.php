<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::query()->create([
            'title' => 'Saytlar Üçün Professional Problem Həlləri',
            'specialty' => 'PHP Laravel Developer',
            'short_description' => 'PHP və Laravel frameworkü vasitəsilə web saytlar yazmağı sevən biri ;)',
            'description' =>    'Backend PHP/Laravel Developer kimi e-ticarət, blog, cms və s. Platformaları üçün
                                yüksək keyfiyyətli və davamlı proqram təminatının işlənib hazırlanmasında
                                təcrübəm var.
                                PHP, Laravel, JavaScript-də texniki biliklərim, problem həll etmə
                                bacarıqlarım və komanda ilə əməkdaşlıq bacarıqlarımla birlikdə sistemin
                                səmərəliliyi və istifadəçi cəlb edilməsində əhəmiyyətli rolum var',
            'phone' => '+994(55)8783700',
            'address' => 'Azerbaijan, Baku Nəsimi rayon Mustafa Topçubaşov 21A',
            'instagram' => 'https://www.instagram.com/_orkhan_rg_/',
            'facebook' => 'https://www.facebook.com/profile.php?id=100010973659122',
            'linkedin' => 'https://www.linkedin.com/in/orxan-ismay%C4%B1lov//',
            'github' => 'https://github.com/OrkhanRG',
        ]);
    }
}
