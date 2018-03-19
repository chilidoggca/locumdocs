<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorsement extends Model
{
    public function active_endorsable()
    {
        return $this->morphTo();
    }

    public function passive_endorsable()
    {
        return $this->morphTo();
    }

}
