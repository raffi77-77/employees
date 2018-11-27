<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'surname', 'date_of_birth', 'gender', 'position', 'salary'];
}
