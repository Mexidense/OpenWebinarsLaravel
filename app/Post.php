<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

//    protected $primaryKey = 'id'; not used because by default use id as primary key.

    protected $fillable = [
        'title',
        'body',
    ];

    protected $guarded = [
      'deleted',
    ];

}
