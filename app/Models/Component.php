<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $fillable=['template_id','name','boiler_plate','associated_styles','associated_scripts','active'];

    function template()
    {
        return $this->belongsTo(Template::class);
    }
}

