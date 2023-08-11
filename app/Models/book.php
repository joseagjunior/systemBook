<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'title',
        'author',
        'description',
        'published_year',
        'isbn',
        'cover_image',
    ];

    protected $dates = [
        'deleted_at',
    ];
}
