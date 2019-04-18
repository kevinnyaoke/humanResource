<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaryemployee extends Model
{
    protected $fillable=['firstname','lastname','email','phone','gender','title','amount'];

}
