<?php

//namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                [
                    'name' => 'SuperAdmin',
                    'username' => 'superadmin',
                    'email' => 'superadmin@gmail.com',
                    'password' => bcrypt('123456'),
                    'roles_name' => ["superadmin"],
                    'status' => 'active'
                ],

        ];

        foreach($users as $user){
            $user = User::create($user);
        }


       $roles = [
                [
                    'name' => 'SuperAdmin'
                ],


        ];
        $permissions = Permission::pluck('id','id')->all();

       foreach($roles as $role){
        $role = Role::create($role);
        $role->syncPermissions($permissions);
      }





        $user->assignRole([$role->id]);
    }
}
