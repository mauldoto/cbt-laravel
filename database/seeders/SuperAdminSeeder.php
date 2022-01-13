<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('user_type', 'superadmin')->delete();
    	$superadmin = factory(\App\Models\User::class, 1)->states('demo-admin')->create();
    }
}
