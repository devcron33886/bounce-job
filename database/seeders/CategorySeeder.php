<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            [
                'name'=>'Private Chauffeur Services',
                'slug'=>'private-chauffeur-services',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Corporate Chauffeur Services',
                'slug'=>'corporate-chauffeur-services',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Catering Services',
                'slug'=>'catering-services',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Airport Transfers',
                'slug'=>'airport-transfers',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Car Rental',
                'slug'=>'car-rental',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Gardening Services',
                'slug'=>'gardening-services',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Wedding Services',
                'slug'=>'wedding-services',
                'image'=>'',
                'icon'=>''
            ],
            [
                'name'=>'Event Management',
                'slug'=>'event-management',
                'image'=>'',
                'icon'=>''
            ],

        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
        
    }
}
