<?php

use Illuminate\Database\Seeder;

class ngiclix_users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ngiclix_users')->insert([
            'users_name' => 'ngadimin',
            'users_email' => 'repan@localhost',
            'users_password' => Hash::make('repan'),
            'users_role' => 'user',
        ]);
    }
}
