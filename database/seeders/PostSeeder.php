<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create articles for this tenant
        $tenants = \App\Models\Tenant::all();

        $tenants->each(function($tenant) {
            \App\Models\Content\Post::factory(3)->create([
                'tenant_id' => $tenant->id,
            ]);
        });

        // Create lessons for some modules
        $modules = \App\Models\Content\Module::all();

        $modules->each(function($module) {
            // $module->hasPosts(4)->create();
        });
    }
}
