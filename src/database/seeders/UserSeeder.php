<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Kae Kodama',
                'email' => 'kae.kodama249@gmail.com',
                'password' => Hash::make('kaek0909')
            ],
            [
                'name' => 'Kae Koda',
                'email' => 'kae.koda249@gmail.com',
                'password' => Hash::make('kaek0909')
            ],
        ]);
    }
}
