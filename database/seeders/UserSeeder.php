<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Bali Merta Yasa',
                'email' => 'admin@demo.com',
                'email_verified_at' => now(),
                'password' => bcrypt('asdasdasd'),
                'remember_token' => Str::random(10),
            ]
        ];

        foreach($admin as $ad){
            User::updateOrCreate(['email' => $ad['email']], $ad);
        }
    }
}
