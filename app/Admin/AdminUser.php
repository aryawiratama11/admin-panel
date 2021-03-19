<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The guard of module
     * @var string
     */
    protected $guard_name = 'admin';

    /**
     * The table of module
     * @var string
     */
    protected $table = 'admin_users';

    /**
     * Return The Role Object of This Admin User
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
