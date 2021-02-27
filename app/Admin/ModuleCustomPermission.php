<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Admin\CustomPermission;
use App\Admin\Module;

class ModuleCustomPermission extends Model
{

    use SoftDeletes;

    protected $table = 'modules_custom_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module_id',
        'custom_permission_id',
    ];

    /**
     * return Module Object
     */
    public function module(){
        return $this->belongsTo(Module::class, 'module_id');
    }

    /**
     * return Module CustomPermission Object
     */
    public function custompermission(){
        return $this->belongsTo(CustomPermission::class, 'custom_permission_id');
    }

}
