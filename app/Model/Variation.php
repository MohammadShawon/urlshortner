<?php

namespace App\Model;

use \Eloquent;

class Variation extends Eloquent
{

    protected $guarded = array();
    public static $rules = array();
    protected $fillable = ['name', 'source', 'medium', 'term'];

    public function url()
    {
        return $this->belongsToMany('App\Model\Url');
    }

}
