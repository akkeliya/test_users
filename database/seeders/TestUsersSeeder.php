<?php

namespace Database\Seeders;

use App\Models\TestUsers;
use Illuminate\Database\Seeder;


class TestUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TestUsers::factory()->count(1000000)->make()->each(function($user){
            $user->save();
        });
    }
}
