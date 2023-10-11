<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Member;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'maul',
            'username' => 'maul',
            'password' => bcrypt('maul'),
            'level' => 'Admin',
        ]);

        Member::create([
            'nama' => 'husen',
            'username' => 'husen',
            'password' => bcrypt('husen'),
            'alamat' => 'rumah',
            'no_telp' => '082349324',
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
