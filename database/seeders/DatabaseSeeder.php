<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            categorySeeder::class,
        ]);

        \App\Models\Author::factory(6)->create();
        \App\Models\Book::factory(25)->create();
       
    }
}
