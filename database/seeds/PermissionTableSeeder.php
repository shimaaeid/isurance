<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'list-emp',
           'add-emp',
           'edit-emp',
           'delete-emp',
           'list-user',
           'add-user',
           'edit-user',
           'delete-user',
           'list-role',
           'add-role',
           'edit-role',
           'delete-role'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
