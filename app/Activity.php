<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name','description','start','end','day','approved','approved_by','status','user_id','division_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function division()
    {
    	return $this->belongsTo(Division::class);
    }
}
