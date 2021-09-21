<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class insurance_grate extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
}
