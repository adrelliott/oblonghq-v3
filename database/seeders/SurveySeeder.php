<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = \App\Models\Crm\Business::all();

        $businesses->each(function($business) {
            \App\Models\Surveys\Survey::factory(3)
                ->has(
                    \App\Models\Surveys\Section::factory()
                        ->sequence(fn ($sequence) => ['order' => $sequence->index])
                        ->count(4)
                )
                ->create([
                    'client_id' => $business->id,
                    'tenant_id' => $business->tenant_id,
                ]);
        });
    }
}
