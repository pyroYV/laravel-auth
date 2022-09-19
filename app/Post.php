<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_title',
        'post_author',
        'post_content',
        'post_creation_date',
        'post_image',
    ];
}
