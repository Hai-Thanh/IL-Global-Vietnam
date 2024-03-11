<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportCompanySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_vi',
        'title_en',
        'title_zh_cn',
        'title_ko',

        'describe_vi',
        'describe_en',
        'describe_zh_cn',
        'describe_ko',

        'title_service_vi',
        'title_service_en',
        'title_service_zh_cn',
        'title_service_ko',

        'describe_service_vi',
        'describe_service_en',
        'describe_service_zh_cn',
        'describe_service_ko',

        'title_cert_vi',
        'title_cert_en',
        'title_cert_zh_cn',
        'title_cert_ko',

        'describe_cert_vi',
        'describe_cert_en',
        'describe_cert_zh_cn',
        'describe_cert_ko',
    ];
}
