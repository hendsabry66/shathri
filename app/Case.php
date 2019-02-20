<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
     public function case_type(){
        return $this->belongsTo('App\CaseType', 'case_type_id');
    }

     public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
