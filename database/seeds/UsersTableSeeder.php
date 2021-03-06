<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'bhattbrijraj',
            'email' => 'bhattbrijraj568@gmail.com',
            'password' => bcrypt(123)
        ]);

        $user->assignRole('admin');

        $user->save();
    }
}
