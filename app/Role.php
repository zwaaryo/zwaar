<?php namespace App;

use Mindscms\Entrust\EntrustRole;
class Role extends EntrustRole
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(\App\User::class );
    }
}