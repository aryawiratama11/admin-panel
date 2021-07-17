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
        $role->givePermissionTo('create_admin_user');
        $role->givePermissionTo('edit_admin_user');
        $role->givePermissionTo('delete_admin_user');
        $role->givePermissionTo('is_active_admin_user');

        $role->givePermissionTo('view_roles');
        $role->givePermissionTo('create_role');
        $role->givePermissionTo('edit_role');
        $role->givePermissionTo('delete_role');
        $role->givePermissionTo('is_active_role');

        $role->givePermissionTo('view_modules');
        $role->givePermissionTo('create_module');
        $role->givePermissionTo('edit_module');
        $role->givePermissionTo('delete_module');
        $role->givePermissionTo('is_active_module');
    }
}
