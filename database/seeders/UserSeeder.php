<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                [
                    'name' => 'Admin',
                    'email'=> 'admin@gmail.com',
                    'is_admin' => true,
                ],
                [
                    'name' => 'User',
                    'email'=> 'user@gmail.com',
                    'is_admin' => false,
                ]
        ];

        foreach($users as $user){
            User::create(
                array_merge(
                    $user,[
                        'email_verified_at' => now(),
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                        'remember_token' => Str::random(10),
                    ]
                )
                    );
        }
    }
}
