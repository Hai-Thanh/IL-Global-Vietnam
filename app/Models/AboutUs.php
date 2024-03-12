<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_about_vi',
        'title_about_en',
        'title_about_zh_cn',
        'title_about_ko',
        'img_about',
        'describe_about_vi',
        'describe_about_en',
        'describe_about_zh_cn',
        'describe_about_ko',
        'name_us',
        'describe_us_vi',
        'describe_us_en',
        'describe_us_zh_cn',
        'describe_us_ko',
    ];

}
