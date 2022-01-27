<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $query = ["What is your best friend name?", "What is your high school name?"];
        foreach ($query as $q) {
            Question::create([
                "query" => $q
            ]);
        }
    }
}