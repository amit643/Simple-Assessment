<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->truncate();
        DB::table('role')->insert([
                ['id' => '1','name' => 'admin','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL],
        ]);
    }
}
