<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Admin\Module;

class CustomPermission extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Return All Modules Related By This Custom Permission
     */
    public function modules(){
        //return $this->belongsToMany(Module::class, 'modules_custom_permissions', 'custom_permission_id', 'module_id');
        return $this->belongsToMany(Module::class)->using(ModuleCustomPermission::class);
    }
}
