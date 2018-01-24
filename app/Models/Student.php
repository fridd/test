<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model

{
    protected $table='student';
    protected $fillable=['username_id','name','sex','dance','music','art','english','sport','hobby','skill'];
}
