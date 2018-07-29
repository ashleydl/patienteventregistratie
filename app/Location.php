<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city', 'postcode','straat', 'nummer', 'toevoeging', 'location_id'
    ];

    /**
     * Get the events for the location.
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }

}