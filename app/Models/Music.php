<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //设置链接数据表
    public $table = 'music';
    //关闭自动维护字段
    public $timestamps = false;
}
