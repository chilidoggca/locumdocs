<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function passiveEndorsable()
    {
        return $this->morphOne('App\PassiveEndorsable', 'passive_endorsable');
    }

    public function activeEndorsable()
    {
        return $this->morphOne('App\ActiveEndorsable', 'active_endorsable');
    }
}
