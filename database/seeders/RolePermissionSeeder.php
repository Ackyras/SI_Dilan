<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rolePermissions = [
            [
                'role'          =>  [
                    'name'  =>  'Director',
                ],
                'permissions'    =>  [],
            ],
            [
                'role'          =>  [
                    'name'  =>  'Admin',
                ],
                'permissions'    =>  [],
            ],
            [
                'role'          =>  [
                    'name'  =>  'User',
                ],
                'permissions'    =>  [],
            ],
        ];
        foreach ($rolePermissions as $rolePermission) {
            $role = Role::create($rolePermission['role']);
            // foreach ($rolePermission['permissions'] as $permission) {

            // }
        }
    }
}
