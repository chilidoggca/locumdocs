<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveEndorsable extends Model
{
    public function doctors()
    {
        return $this->morphedByMany('App\Doctor', 'active_endorsable');
    }

    public function clinics()
    {
        return $this->morphedByMany('App\Clinic', 'active_endorsable');
    }
}
