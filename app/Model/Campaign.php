<?php

namespace App\Model;

use \Eloquent;

class Campaign extends Eloquent
{

    protected $guarded = array();
    public static $rules = array();
    protected $fillable = ['name', 'source', 'medium', 'term', 'short', 'url_id'];

    public function url()
    {
        return $this->belongsTo('App\Model\Url');
    }

}
