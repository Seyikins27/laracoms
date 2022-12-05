<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;
    protected $fillable=['title','main','url','sub_navigation','active'];

    function navigation()
    {
        return $this->belongsTo(Navigation::class,'sub_navigation');
    }

    function sub_navigation()
    {
        return $this->hasMany(Navigation::class,'sub_navigation');
    }
}
