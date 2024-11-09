<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Define and create Role and registered to DatabaseSeeder.php.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'Administrator',
        ],[
            'name' => 'Administrator',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'User',
        ],[
            'name' => 'User',
            'guard_name' => 'web'
        ]);
    }
}
