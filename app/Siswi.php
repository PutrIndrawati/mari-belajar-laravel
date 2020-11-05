<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswi extends Model
{
    protected $guarded = ['id'];
    // Mass Assignment
    protected $table = "siswi";
}
