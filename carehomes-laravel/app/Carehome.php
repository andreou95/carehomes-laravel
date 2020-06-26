<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carehome extends Model
{
    protected $fillable = ['name','number_beds','location_id','group_id','notes'];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }

    public function specialisms()
    {
        return $this->belongsToMany('App\Specialism');
    }

}



