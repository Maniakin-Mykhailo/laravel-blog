<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post ' . $i,
                'slug' => 'Post-' . $i,
                'description' => 'Description of post ' . $i,
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi, corporis fuga mollitia non ratione?<br>'. $i .'</p>',
            ]);
        }
    }
}
