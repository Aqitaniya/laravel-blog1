<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task1 extends Model
{
    public function isComplete(){
        return false;
    }
}
