<?php

namespace Database\Seeders;

use App\Models\Issue;
use App\Models\User;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Issue::factory()
            ->count(100)
            ->create();
    }
}
