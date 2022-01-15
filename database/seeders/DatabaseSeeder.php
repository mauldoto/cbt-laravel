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
        \App\Models\User::factory(1)->superadmin()->create();
        \App\Models\User::factory(1)->teacher()->create();
        \App\Models\User::factory(1)->student()->create();
        // $this->call([
        //     SuperAdminSeeder::class,
        // ]);
    }
}
