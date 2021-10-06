<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
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
            \App\Models\Crm\Contact::factory(15)->create([
                'business_id' => $business->id,
            ]);
        });
    }
}
