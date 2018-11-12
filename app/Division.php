<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name','description','is_active','manager'];
    protected $dates = ['created_at'];

    public function members()
    {
    	return $this->belongsToMany(User::class,'division_user','user_id','division_id');
    }

    public function activities()
    {
    	return $this->hasMany(Activity::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class,'manager_id');
    }
}
