<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
//    protected $fillable = ['body'];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
