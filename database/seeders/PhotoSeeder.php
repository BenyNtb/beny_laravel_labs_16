<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'src' => 'admin.png',
                'created_at' => now(),
            ],
            [
                'src' => 'webmaster.png',

                'created_at' => now(),
            ],
            [
                'src' => 'redacteur.png',
                'created_at' => now(),
            ],
            [
                'src' => 'membre.png',
                'created_at' => now(),
            ],
            [
                'src' => 'team/1.jpg',
                'created_at' => now(),
            ],
            [
                'src' => 'team/2.jpg',
                'created_at' => now(),
            ],
            [
                'src' => 'team/3.jpg',
                'created_at' => now(),
            ],
            
            [
                'src' => 'avatar/01.jpg',
                'created_at' => now(),
            ],
            [
                'src' => 'avatar/02.jpg',
                'created_at' => now(),
            ],
            [
                'src' => 'avatar/03.jpg',
                'created_at' => now(),
            ],


        ]);
    }
}
