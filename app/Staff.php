<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'company_id',
        'staff_name',
        'staff_age',
        'staff_job'
    ];
}
