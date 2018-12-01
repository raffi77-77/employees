<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Employee extends Model
{
    /**
     * Fillable fields of the table
    */
    protected $fillable = ['name', 'surname', 'date_of_birth', 'gender', 'position', 'salary'];


    /**
     * Get the column names of the table
    */
    public static function tableFields(){
        return Schema::getColumnListing('employees');
    }
}
