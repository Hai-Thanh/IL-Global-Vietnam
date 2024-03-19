<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'logo',
        'address',
        'link_map',
        'phone',
        'phone',
        'describe_vi',
        'describe_en',
        'describe_ko',
        'describe_zh_cn',

    ];
}
