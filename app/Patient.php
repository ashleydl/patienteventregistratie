<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // each bear climbs many trees
    public function incidents() {
        return $this->hasMany('App\Incident');
    }
}
