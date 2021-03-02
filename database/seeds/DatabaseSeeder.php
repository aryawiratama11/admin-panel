<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Admin\AdminUser;
use App\Admin\Module;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create Main Modules
        $admin_users_module = Module::create([
            'name' => 'Admin Users',
        ]);

        $roles_module = Module::create([
            'name' => 'Roles',
        ]);

        $modules_module = Module::create([
            'name' => 'Modules',
        ]);

        // create permissions to admin_user module
        Permission::create([
            'name' => 'list admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'name' => 'create admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'name' => 'edit admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'name' => 'delete admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'name' => 'is_active admin_users',
            'module_id' => $admin_users_module->id
        ]);

        // create permissions to roles module
        Permission::create([
            'name' => 'list roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'name' => 'create roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'name' => 'edit roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'name' => 'delete roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'name' => 'is_active roles',
            'module_id' => $roles_module->id
        ]);

        // create permissions to modules module
        Permission::create([
            'name' => 'list roles',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'name' => 'create roles',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'name' => 'edit roles',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'name' => 'delete roles',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'name' => 'is_active roles',
            'module_id' => $modules_module->id
        ]);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('list admin_users');
        $role->givePermissionTo('create admin_users');
        $role->givePermissionTo('edit admin_users');
        $role->givePermissionTo('delete admin_users');
        $role->givePermissionTo('is_active admin_users');

        $role->givePermissionTo('list roles');
        $role->givePermissionTo('create roles');
        $role->givePermissionTo('edit roles');
        $role->givePermissionTo('delete roles');
        $role->givePermissionTo('is_active roles');

        $role->givePermissionTo('list modules');
        $role->givePermissionTo('create modules');
        $role->givePermissionTo('edit modules');
        $role->givePermissionTo('delete modules');
        $role->givePermissionTo('is_active modules');


        // create Admin user
        $user = AdminUser::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
        ]);
        $user->assignRole($role);
    }
}
