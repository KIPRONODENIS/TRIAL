<?php

namespace trial;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    public function teachers(){


    	return $this->hasMany(teachers::class);
    }
}
