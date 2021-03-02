<?php

use App\Admin\AdminUser;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create Admin user
        $user = AdminUser::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
            'role_id' => Role::where('name', '=', 'administrator')->firstOrFail()->id
        ]);
        $user->assignRole(Role::where('name', '=', 'administrator')->firstOrFail());
    }
}
