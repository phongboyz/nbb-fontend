<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name_la','name_en','tel','website','facebook',
        'app_android','app_ios','app_huawei','detail','logo'
    ];

}
