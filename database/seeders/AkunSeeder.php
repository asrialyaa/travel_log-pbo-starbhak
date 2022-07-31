<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'nik' => '123456',
            'namalengkap' => 'Asri',
            'email' => 'admin@gmail,com',
            'password' => bcrypt('asri123'),
            ]
        ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
