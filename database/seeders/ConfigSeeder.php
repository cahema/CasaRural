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

        DB::table('configs')->insert([
            'name' => 'ID Google Calendar',
            'value' => 'c_d2f5717a492c1e603dd9e34e681d13cb65427888b5bb70520d1ee09d2dae4e63%40group.calendar.google.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('configs')->insert([
            'name' => 'Correo de notificaciones',
            'value' => 'xchermar478@ieshnosmachado.org',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
