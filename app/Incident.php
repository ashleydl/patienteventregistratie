<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'event_id', 'complaint', 'injury', 'abcd', 'respiration', 'avpu', 'circulation', 'active_bleeding', 'variant_fast', 'medicines', 'medicines_desc', 'relevant_diseases', 'diseases_history', 'last_meal', 'treatment_desc', 'taken_action', 'timeleft', 'additionalcomments', 'namescaregiver', 'evaluate_supervisor',
    ];

    // each incident has one patient
    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    // each incident has one event
    public function event() {
        return $this->belongsTo('App\Event');
    }
}
