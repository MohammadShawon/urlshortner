<?php

namespace App\Model;

class School extends \Eloquent
{

    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $guarded = array();
    public static $rules = array();
    public $timestamps = false;
    protected $table = 'school_info';
    protected $fillable = ['code', 'school', 'street', 'city', 'state', 'zip', 'county', 'dma'];

    public function event()
    {
        return $this->belongsTo('App\Model\Event');
    }

    public function variation()
    {
        return $this->belongsTo('App\Model\Variation');
    }

}
