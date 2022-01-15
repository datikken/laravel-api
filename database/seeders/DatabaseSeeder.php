<?php

namespace Database\Seeders;

use App\Models\Spider;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Petition;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Petition::factory(50)->create();
        Author::factory(10)->create();
        Spider::factory(1)->create();
    }
}
