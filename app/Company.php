<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'event_id',
        'company_name',
        'company_location'
    ];
}
