<?php

namespace trial;
use Illuminate\Foundation\Auth\User as Authenticatable;  
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    //
    protected $guarded=[];
}
