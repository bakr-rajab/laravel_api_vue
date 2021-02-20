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
        //
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password'
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
