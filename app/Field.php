<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
}
