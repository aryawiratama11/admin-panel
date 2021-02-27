<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
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
     * Return All CustomPermssions Related By This Module
     */
    public function custompermssions(){
        //return $this->belongsToMany(CustomPermission::class, 'modules_custom_permissions', 'module_id', 'custom_permission_id');
        return $this->belongsToMany(CustomPermission::class)->using(ModuleCustomPermission::class);
    }
}
