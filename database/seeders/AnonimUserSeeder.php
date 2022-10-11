<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnonimUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeder that creates owner for comments of users that are not logged in.
        User::create(['name' => 'Anonim', 'email' => 'Anonim@Anonim.com', 'password' => bcrypt('123123'), 'username' => 'Anonim']);
    }
}
