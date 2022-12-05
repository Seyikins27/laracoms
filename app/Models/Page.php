<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable=['title','url','seo_tags','banner_image','content','boiler_plate','sub_page','published'];

    function page()
    {
        return $this->belongsTo(Page::class,'sub_page');
    }

    function sub_page()
    {
        return $this->hasMany(Page::class,'sub_page');
    }
}
