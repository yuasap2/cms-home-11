<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'company',
        'name',
        'phone',
        'mail',
        'birthday',
        'sex',
        'job',
        'contact',
        'status',
        'remarks',
    ];
}
