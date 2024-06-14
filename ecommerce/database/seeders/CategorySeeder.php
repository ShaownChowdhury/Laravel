<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category' => 'Furniture',
                'slug' => 'furni',
                'icon' => 'demo/product/categories/furni-2.png'
            ],
            [
                'category' => 'Jewelry',
                'slug' => 'jewelry',
                'icon' => 'demo/product/categories/jewelry-3.png'
            ],
            [
                'category' => 'Electronics',
                'slug' => 'electronics',
                'icon' => 'demo/product/categories/elec-5.png'
            ]
            
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
