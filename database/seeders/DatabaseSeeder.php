<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
        	'username' => 'admin',
        	'password' => Hash::make('admin123')
        ]);
    }
}
