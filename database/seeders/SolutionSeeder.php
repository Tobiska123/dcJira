<?php

namespace Database\Seeders;

use App\Models\Solution;
use App\Models\User;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Solution::factory()
            ->count(100)
            ->create();
    }
}
