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
        DB::table('users')->insert([
            [
            'name' => 'aaaaa',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'bbbbb',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
