<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Table Name
    protected $table = 'jobs';
    // Primary Key
    public $primaryKey = 'id';
    // Time Stamps
    public $timestamps = true;

}
