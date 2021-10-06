<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenants = \App\Models\Tenant::all();

        $tenants->each(function($tenant) {
            \App\Models\Content\Course::factory(3)->create([
                'tenant_id' => $tenant->id,
            ]);
        });
    }
}
