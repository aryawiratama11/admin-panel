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

        // create permissions
        Permission::create(['name' => 'list admin users']);
        Permission::create(['name' => 'create admin users']);
        Permission::create(['name' => 'edit admin users']);
        Permission::create(['name' => 'delete admin users']);
        Permission::create(['name' => 'is_active admin users']);

        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'is_active roles']);

        Permission::create(['name' => 'list modules']);
        Permission::create(['name' => 'create modules']);
        Permission::create(['name' => 'edit modules']);
        Permission::create(['name' => 'delete modules']);
        Permission::create(['name' => 'is_active modules']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo('list admin users');
        $role->givePermissionTo('create admin users');
        $role->givePermissionTo('edit admin users');
        $role->givePermissionTo('delete admin users');
        $role->givePermissionTo('is_active admin users');

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

        Module::createMany([
            ['Admin Users'],
            ['Roles'],
            ['Custom Permissions'],
            ['Modules'],
        ]);
    }
}
