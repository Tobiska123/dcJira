<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::factory()
            ->count(100)
            ->create();
    }
}
