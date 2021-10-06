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
            \App\Models\Surveys\Survey::factory(15)->create([
                'business_id' => $business->id,
                'tenant_id' => $business->tenant_id,
            ]);
        });
    }
}
