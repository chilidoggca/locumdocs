<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function endorsements()
    {
        return $this->morphOne('App\Endorsement', 'endorsable');
    }
}
