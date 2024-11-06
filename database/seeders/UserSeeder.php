<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userDatas = [
            [
                "name" => "Francesco",
                "email" => "fra@gmail.com",
                "password" => "12345678",
            ],
            [
                "name" => "Francesca",
                "email" => "fr@gmail.com",
                "password" => "12345678",
            ],
            [
                "name" => "Franco",
                "email" => "franchino@gmail.com",
                "password" => "12345678",
            ],
        ];

        foreach ($userDatas as $singleUserData) {
            $user = new User();
            $user->name = $singleUserData["name"];
            $user->email = $singleUserData["email"];
            $user->password = Hash::make($singleUserData["password"]);
            $user->save();
        }
    }
}