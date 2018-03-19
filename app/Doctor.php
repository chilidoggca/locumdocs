<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function endorsementsRecevied()
    {
        return $this->morphMany('App\Endorsement', 'passive_endorsable');
    }

    public function endorsementsGiven()
    {
        return $this->morphMany('App\Endorsement', 'active_endorsable');
    }

}
