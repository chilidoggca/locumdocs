<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassiveEndorsable extends Model
{
    public function doctors()
    {
        return $this->morphedByMany('App\Doctor', 'passive_endorsable');
    }

    public function clinics()
    {
        return $this->morphedByMany('App\Clinic', 'passive_endorsable');
    }
}
