<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = \App\Models\Surveys\Section::all();

        $sections->each(function($section) {
            $questions = \App\Models\Surveys\Question::factory(5)
                ->sequence(fn ($sequence) => ['order' => $sequence->index])
                ->create();
            $section->questions()->attach($questions->pluck('id'));
        });
    }
}
