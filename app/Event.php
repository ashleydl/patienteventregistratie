<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'location', 'date'
    ];

    // each event has many incidents
    public function incidents() {
        return $this->hasMany('App\Incident');
    }

    public function location()  {
        return $this->belongsTo('App\Location');
    }
}

