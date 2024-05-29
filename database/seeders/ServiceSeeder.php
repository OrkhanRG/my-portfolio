<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Brendinq & Dizayn',
                'description' => 'Brendinq və Dizayn işlərinin aparılması',
                'is_featured' => 1,
            ],
            [
                'name' => 'Web Development',
                'description' => 'Müxtəlif saytların hazırlanması və texniki nəzarət',
                'is_featured' => 1,
            ],
            [
                'name' => 'SEO & Digital Marketing',
                'description' => 'SEO və Rəqəmsal Marketinq işlərinin aparılması',
                'is_featured' => 1,
            ],
            [
                'name' => 'Mobile Application Design',
                'description' => 'Mobil tətbiqlərin yaradılması və dizaynı',
                'is_featured' => 1,
            ],
        ];

        foreach ($services as $service)
        {
            Service::query()->create($service);
        }
    }
}
