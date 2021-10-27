<?php

use App\Account;
use App\Immeuble;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 5)->create();
        factory(\App\Account::class, 5)->create();
    }
}
