<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'id','type','name','parent_id','sub_name','sub_parent_id','parent_sub_name','note','cate_menu','active','relation','user_id','departments_id','del','order'
    ];
    public function parentname()
    {
        return $this->belongsTo('App\Models\Menu','parent_id','id');
    }
    public function subparentname()
    {
        return $this->belongsTo('App\Models\Menu','sub_parent_id','id');
    }
}
