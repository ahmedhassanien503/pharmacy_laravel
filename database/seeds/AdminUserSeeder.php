<?php

use Illuminate\Database\Seeder;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  DB::table('admins')->insert([
        'email' => 'admin@admin.com',
        'password' => bcrypt('123456'),

    ]);
    
    }
}
