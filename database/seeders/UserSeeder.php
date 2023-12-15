<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'xchermar478@ieshnosmachado.org',
            'password' => Hash::make('admin'),
            'name' => 'Carlos',
            'surname' => 'Herrera Mármol',
            'telephone' => '601414717',
            'newsletter' => true,
            'role_id' => 2,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        /*User::factory()
            ->count(20)
            ->create();*/
    }
}
