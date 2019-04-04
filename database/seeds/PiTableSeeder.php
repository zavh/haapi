<?php

use Illuminate\Database\Seeder;

class PiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pis')->insert([
            'user_id' => 1,
            'pi_id' => 'LT0001',
            'created_at' => date('Y-m-d H:m:i'),
            'updated_at' => date('Y-m-d H:m:i'),
        ]);

        DB::table('pis')->insert([
            'user_id' => 1,
            'pi_id' => 'LT0002',
            'created_at' => date('Y-m-d H:m:i'),
            'updated_at' => date('Y-m-d H:m:i'),
        ]);
    }
}
