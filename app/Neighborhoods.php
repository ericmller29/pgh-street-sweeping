<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhoods extends Model
{
    protected $table = 'neighborhoods';
    protected $fillable = ['name'];
}
