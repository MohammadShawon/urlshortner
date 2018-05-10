<?php

namespace App\Model;

class Url extends \Eloquent
{

    protected $guarded = array();
    public static $rules = array();
    protected $fillable = ['event_id', 'variation_id', 'longs', 'shorts'];

    public function event()
    {
        return $this->belongsTo('App\Model\Event');
    }

    public function variation()
    {
        return $this->belongsTo('App\Model\Variation');
    }

}
