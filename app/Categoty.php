<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoty extends Model
{
    protected $table = 'category';
    protected $fillable = ['id', 'name'];
}
