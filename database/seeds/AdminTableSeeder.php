<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name = "administrator A";
        $administrator->email = "administrator@spkkost.com";
        $administrator->role = "admin";
        $administrator->password = \Hash::make("1234567");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";

        $administrator->save();

        $this->command->info("User Admin Berhasil Di insert");
    }
}
