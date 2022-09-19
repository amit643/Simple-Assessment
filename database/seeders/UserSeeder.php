<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
                ['id' => '1','name' => 'admin','email'=>'admin@gmail.com','email_verified_at' => '2022-09-19 18:07:39','password'=>'$2y$10$91tEy1bhyJ7SdtbIxxtLk.CuXToxLGzpzzjqVKv.NL0qTuELp9ADK','remember_token' => NULL,'created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL],
        ]);
    }
}
