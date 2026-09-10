<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                // 'role' => 'admin',
                'avatar' => public_path('front/assets/images/avatars/defaut.jpeg'),
            ],
            [
                'name' => 'User Two',
                'email' => 'user.two@example.com',
                'password' => bcrypt('password'),
                'avatar' => public_path('front/assets/images/avatars/defaut.jpeg'),
                // 'role' => 'user',
            ],
        ];
        
        foreach ($users as $user) {
            $data = collect($user)->except(['avatar'])->toArray();
            $user = User::create($data);

            if (isset($user['avatar'])) {
                $user->addMediaFromUrl($user['avatar'])
                    ->preservingOriginal()
                    ->toMediaCollection('avatars');
            }
        }
    }
}
