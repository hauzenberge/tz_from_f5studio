<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ADS extends Model
{
    protected $table = 'ads';
    protected $fillable = ['id', 'title', 'author_id', 'category_id', 'image', 'price', 'publishet', 'text', 'created_at'];
}
