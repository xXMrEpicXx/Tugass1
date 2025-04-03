<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        // Kosongkan tabel dan folder storage
        Promotion::truncate();
        Storage::deleteDirectory('public/promo-images');
        Storage::makeDirectory('public/promo-images');

        $promotions = [
            [
                'title' => 'Summer Sale',
                'description' => 'Get up to 50% off on all items!',
                'image' => 'promo-images/summer.jpg'
            ],
            [
                'title' => 'Winter Discount', 
                'description' => 'Enjoy a cozy winter with special discounts!',
                'image' => 'promo-images/winter.jpg'
            ],
            [
                'title' => 'Black Friday Deals',
                'description' => 'Limited-time offers for Black Friday!',
                'image' => 'promo-images/blackfriday.jpg'
            ]
        ];

        foreach ($promotions as $promo) {
            // Copy gambar contoh dari folder ke storage
            $imagePath = "demo-images/{$promo['image']}";
            if (file_exists(resource_path($imagePath))) {
                Storage::putFileAs(
                    'public/promo-images',
                    resource_path($imagePath),
                    basename($promo['image'])
                );
            }

            Promotion::create($promo);
        }
    }
}