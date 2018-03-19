<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorsement extends Model
{
    public function endorsable()
    {
        return $this->morphTo();
    }
}
