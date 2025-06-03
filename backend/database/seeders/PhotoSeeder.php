<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        $source_path = public_path('assets/frontend/img');
        $destination_path = public_path('uploads/photos');
        \Illuminate\Support\Facades\File::cleanDirectory($destination_path);
        \Illuminate\Support\Facades\File::copyDirectory($source_path, $destination_path);

        foreach (range(1,400) as $index) {
            $photo = \Illuminate\Support\Facades\File::files($destination_path);
            $photo = collect($photo)->random()->getFilename();

            $title = $faker->sentence(3);

            \App\Models\Photo::create([
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'image' => $photo,
                'category_id' => rand(1, 20), // Assuming you have 20 categories
            ]);
        }
    }
}
