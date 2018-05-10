<?php

namespace App\Model;

use \Eloquent;

class Event extends Eloquent
{

    protected $guarded = array();
    public static $rules = array();
    protected $fillable = ['number', 'upload_id', 'campaign_name', 'home_school', 'away_school', 'status'];

    public function urls()
    {
        return $this->belongsToMany('App\Model\Url');
    }

    public function home()
    {
        return $this->belongsTo('App\Model\School', 'home_school', 'code');
    }

    public function away()
    {
        return $this->belongsTo('App\Model\School', 'away_school', 'code');
    }

}
