<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comment(){
        return $this->belongsTo('App\Post');
    }
    public function comment1(){
        return $this->belongsTo('App\User');
    }
}
