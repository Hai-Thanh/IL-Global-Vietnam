<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'time_in',
        'time_out',
        'day_off',
        'link_linke_in',
        'link_fb',
        'link_tw',
        'link_ins',
        'link_yt',
    ];
}
