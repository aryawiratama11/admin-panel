<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles and assign existing permissions
        $role = Role::create([
            'name' => 'administrator', 'guard_name' => 'admin'
        ]);
        $role->givePermissionTo('view_admin_users');
        $role->givePermissionTo('create_admin_users');
        $role->givePermissionTo('edit_admin_users');
        $role->givePermissionTo('delete_admin_users');
        $role->givePermissionTo('is_active_admin_users');

        $role->givePermissionTo('view_roles');
        $role->givePermissionTo('create_roles');
        $role->givePermissionTo('edit_roles');
        $role->givePermissionTo('delete_roles');
        $role->givePermissionTo('is_active_roles');

        $role->givePermissionTo('view_modules');
        $role->givePermissionTo('create_modules');
        $role->givePermissionTo('edit_modules');
        $role->givePermissionTo('delete_modules');
        $role->givePermissionTo('is_active_modules');
    }
}
