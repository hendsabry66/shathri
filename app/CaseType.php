<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    public function cases(){

    	return $this->hasMany('App\Case','case_type_id');
    }
}
