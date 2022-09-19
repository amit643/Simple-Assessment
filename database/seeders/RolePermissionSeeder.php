<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permission')->truncate();
        DB::table('role_permission')->insert([
                ['id' => '1','role_id' => 1,'user_id'=>1,'created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL],
        ]);
    }
}
