<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'titre' => 'CONTACT US',
            'description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'sous-titre' => 'Main Office',
            'adresse' => 'C/ Libertad, 34
            05200 Arévalo',
            'telephone' => '0034 37483 2445 322',
            'mail' => 'hello@company.com',
            'created_at' => now(),
        ]);
    }
}
