<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admins')->truncate();
        $data = [
           [ 'username' =>'Admin','password' => bcrypt('123456')],
           ['username' =>'sarita','password' => bcrypt('123458')],

        ];

        \Illuminate\Support\Facades\DB::table('admins')->insert($data);

    }
}
