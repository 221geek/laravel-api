<?php

namespace Database\Seeders;

use App\Models\Topicality;
use Illuminate\Database\Seeder;

class TopicalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topicality::factory(30)->create();
    }
}
