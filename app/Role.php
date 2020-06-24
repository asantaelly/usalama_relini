<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{

    protected $table = 'roles';

    /**
     * The users that belong to the role.
     */    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * The permission that belong to the role.
     */ 
    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'permission_role');
    }
}
