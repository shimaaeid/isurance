<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class emp_relatives extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];

    public function relative(){

        return $this->belongsTo(relatives_type::class, 'relative_id', 'id');


    }
}
