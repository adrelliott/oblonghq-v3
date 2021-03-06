<?php

namespace Database\Seeders;

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
        $this->call([
            // Set up the users
            TenantSeeder::class,
            UserSeeder::class,

            // Mock up a crm
            BusinessSeeder::class,
            ContactSeeder::class,
            // ListSeeder::class,

            // Now set up the surveys, sections and questions
            SurveySeeder::class,
            SectionSeeder::class,
            QuestionSeeder::class,

            // Mocks up a membership site
            CourseSeeder::class,
            ModuleSeeder::class,
            PostSeeder::class,
        ]);
    }
}
