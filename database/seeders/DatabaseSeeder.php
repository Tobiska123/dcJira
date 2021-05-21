<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use App\Models\Issue;
use App\Models\Project;
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
        $this->call([
            ProjectSeeder::class,
            FileSeeder::class,
            UserSeeder::class,
            DashboardSeeder::class,
            IssueSeeder::class,
            SolutionSeeder::class
        ]);
    }
}
