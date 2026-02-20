<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Categories')->insert([
            [
                'name' => 'Novel',
                'slug' => 'novel',
            ],
            [
                'name' => 'Comic',
                'slug' => 'comic',
            ],
            [
                'name' => 'Sejarah Islam',
                'slug' => 'sejarah-islam',
            ],
        
        ]);
    } 
   
}
