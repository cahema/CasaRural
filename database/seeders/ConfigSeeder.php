<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('configs')->insert([
            'name' => 'Api Key Maps',
            'value' => 'AIzaSyCkKWiw8n66UPKcKiAuoH-QvtkArwh89Mw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
