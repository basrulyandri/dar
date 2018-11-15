<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name','description','is_active','manager_id'];
    protected $dates = ['created_at'];

    public function members()
    {
    	return $this->belongsToMany(User::class,'division_user','division_id','user_id');
    }

    public function activities()
    {
    	return $this->hasMany(Activity::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class,'manager_id');
    }

    public function notMembers()
    {
        $members = $this->members->pluck('id')->toArray();

        $notMembers = User::whereNotIn('id',$members)->Where('role_id',2)->get();
        return $notMembers;
    }
}
