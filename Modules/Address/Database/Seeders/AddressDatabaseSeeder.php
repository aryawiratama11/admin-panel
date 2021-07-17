<?php

namespace Modules\Address\Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;

class AddressDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $addresses_module = Module::create([
            'name' => 'addresses',
        ]);

        $countries_module = Module::create([
            'name' => 'countries',
        ]);

        $states_module = Module::create([
            'name' => 'states',
        ]);

        $cities_module = Module::create([
            'name' => 'cities',
        ]);

        // create permissions to addresses module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_addresses',
            'label' => 'View Addresses',
            'module_id' => $addresses_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_address',
            'label' => 'Create Address',
            'module_id' => $addresses_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_address',
            'label' => 'Edit Address',
            'module_id' => $addresses_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_address',
            'label' => 'Delete Address',
            'module_id' => $addresses_module->id
        ]);


        // create permissions to Countires module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_countries',
            'label' => 'View Countries',
            'module_id' => $countries_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_country',
            'label' => 'Create Country',
            'module_id' => $countries_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_country',
            'label' => 'Edit Country',
            'module_id' => $countries_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_country',
            'label' => 'Delete Country',
            'module_id' => $countries_module->id
        ]);

        // create permissions to States module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_states',
            'label' => 'View States',
            'module_id' => $states_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_state',
            'label' => 'Create State',
            'module_id' => $states_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_state',
            'label' => 'Edit State',
            'module_id' => $states_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_state',
            'label' => 'Delete State',
            'module_id' => $states_module->id
        ]);

        // create permissions to Cities module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_cities',
            'label' => 'View Cities',
            'module_id' => $cities_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_city',
            'label' => 'Create City',
            'module_id' => $cities_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_city',
            'label' => 'Edit City',
            'module_id' => $cities_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_city',
            'label' => 'Delete City',
            'module_id' => $cities_module->id
        ]);


        /** Add Permissions to Admin User */
        $role = Role::where([
            ['name', 'administrator'],
            ['guard_name', 'admin']
        ])->get()[0];

        $role->givePermissionTo('view_addresses');
        $role->givePermissionTo('create_address');
        $role->givePermissionTo('edit_address');
        $role->givePermissionTo('delete_address');

        $role->givePermissionTo('view_countries');
        $role->givePermissionTo('create_country');
        $role->givePermissionTo('edit_country');
        $role->givePermissionTo('delete_country');

        $role->givePermissionTo('view_states');
        $role->givePermissionTo('create_state');
        $role->givePermissionTo('edit_state');
        $role->givePermissionTo('delete_state');

        $role->givePermissionTo('view_cities');
        $role->givePermissionTo('create_city');
        $role->givePermissionTo('edit_city');
        $role->givePermissionTo('delete_city');
    }
}
