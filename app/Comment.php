<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    //Comment belongs to brand
    public function post()
    {
        return $this->belongsTo('Post', 'commentable_id');
    }

    //Comment have many replies
    public function replies()
    {
        return $this->hasMany('App\Comment', 'commentable_id');
    }
}
