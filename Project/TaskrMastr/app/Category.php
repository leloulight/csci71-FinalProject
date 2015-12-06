<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Category extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

}
