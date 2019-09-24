<?php

use Illuminate\Database\Seeder;

class ngiclix_admin_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ngiclix_admin')->insert([
            'admin_username' => 'repan',
            'admin_password' => Hash::make('repan'),
        ]);
    }
}
