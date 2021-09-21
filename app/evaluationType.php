<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class evaluationType extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
}
