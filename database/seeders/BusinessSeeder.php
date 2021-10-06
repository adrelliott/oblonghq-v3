<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();

        $users->each(function($user) {
            \App\Models\Crm\Business::factory(3)->create([
                'tenant_id' => $user->tenant_id
            ]);
        });
    }
}
