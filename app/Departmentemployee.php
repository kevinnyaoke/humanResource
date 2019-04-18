<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departmentemployee extends Model
{
    protected $fillable=['firstname','lastname','email','phone','gender','title','department'];

}
