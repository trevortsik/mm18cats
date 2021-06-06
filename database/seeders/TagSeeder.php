<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = ['aafriklane', 'eurooplane', 'ameeriklane', 'asiaat'];

        foreach ($tags as $tag) {
            Tag::factory()->create(['tag' => $tag]);
        }
    }
}
