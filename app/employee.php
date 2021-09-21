<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];


    public function contract(){

        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }

    public function insurance_type(){

        return $this->belongsTo(insurancetype::class, 'insurance_type_id', 'id');

    }

    public function evaluation_type(){

        return $this->belongsTo(evaluationType::class, 'evaluation_type_id', 'id');

    }

    public function insurance_grade(){

        return $this->belongsTo(insurance_grate::class, 'insurance_grade_id', 'id');

    }

}
