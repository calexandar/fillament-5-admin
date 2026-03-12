<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'content_2',
        'image_1',
        'image_2',
    ];
}
