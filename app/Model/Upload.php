<?php

namespace App\Model;

use \Eloquent;

class Upload extends \Eloquent
{

    protected $guarded = array();
    public static $rules = array();
    protected $fillable = ['filename'];

    public function events()
    {
        return $this->hasMany('App\Model\Event');
    }

}
