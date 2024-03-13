<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'img_main',
        'title_vi',
        'title_en',
        'title_zh_cn',
        'title_ko',
        'describe_vi',
        'describe_en',
        'describe_zh_cn',
        'describe_ko',
        'title_sub_vi',
        'title_sub_en',
        'title_sub_zh_cn',
        'title_sub_ko',
        'describe_sub_vi',
        'describe_sub_en',
        'describe_sub_zh_cn',
        'describe_sub_ko'
    ];
}
