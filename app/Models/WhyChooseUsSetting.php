<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUsSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'titleWhy_vi',
        'titleWhy_en',
        'titleWhy_zh_cn',
        'titleWhy_ko',
        'describeWhy_vi',
        'describeWhy_en',
        'describeWhy_zh_cn',
        'describeWhy_ko',
        ];
}
