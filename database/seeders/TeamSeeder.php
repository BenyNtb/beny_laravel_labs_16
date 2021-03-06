<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'nom' => 'Christinne Williams',
                'photo_id' => 5,
                'poste_id' => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Bertrand Boulanger',
                'photo_id' => 6,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [
                'nom' => 'Paul Poisson',
                'photo_id' => 7,
                'poste_id' => 4,
                'created_at' => now(),
            ],
