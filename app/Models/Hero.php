<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'button_text',
        'button_link',
        'background_image',
        'stat_1_value',
        'stat_1_label',
        'stat_2_value',
        'stat_2_label',
        'stat_3_value',
        'stat_3_label',
    ];
}
