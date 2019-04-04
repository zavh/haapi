<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'customer_id' => 'admin',
            'password' => bcrypt('@lpha7SPL1'),
            'created_at' => date('Y-m-d H:m:i'),
            'updated_at' => date('Y-m-d H:m:i'),
        ]);

        DB::table('users')->insert([
            'name' => 'Zaved Hossain',
            'email' => 'zaved@sigma-bd.com',
            'customer_id' => 'CH00001',
            'password' => bcrypt('@lpha7SPL1'),
            'created_at' => date('Y-m-d H:m:i'),
            'updated_at' => date('Y-m-d H:m:i'),
        ]);
    }
}
