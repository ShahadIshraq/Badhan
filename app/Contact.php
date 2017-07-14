<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    protected $guarded = ['id']; //guarded

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
