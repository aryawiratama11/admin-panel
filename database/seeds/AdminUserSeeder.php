<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Admin\AdminUser;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo('create admin users');
        $role->givePermissionTo('edit admin users');
        $role->givePermissionTo('delete admin users');
        $role->givePermissionTo('list admin users');

        // create demo users
        $user = AdminUser::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
        ]);
        $user->assignRole($role);

    }
}
