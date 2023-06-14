<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            'picture' => "https://cdn.vox-cdn.com/thumbor/zMs2rekSNWC1wgvSJol-tKdZz3w=/0x0:2040x1360/2000x1333/filters:focal(1020x680:1021x681)/cdn.vox-cdn.com/uploads/chorus_asset/file/24210747/airpodsmirror.jpg",
            'title' => "AirPods-iphone",
            'price' =>700,
            'description'=> "airpods sans fils facile a utiliser"
        ]);
    }
}
