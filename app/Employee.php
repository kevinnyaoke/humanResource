<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['firstname','lastname','email','phone','gender','title'];

    public function department(){
        return $this->hasMany('App\Comment');
    }

public function salary(){
    return $this->hasOne('App\Salary');
}
   
}