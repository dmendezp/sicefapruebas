<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        $permission = Permission::create(['name' => 'apprentices.index'])->syncRoles([$role1 , $role2]);

        $permission = Permission::create(['name' => 'apprentices.add'])->assignRole($role1);
        $permission = Permission::create(['name' => 'apprentices.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'apprentices.delete'])->assignRole($role1);


    }
}
