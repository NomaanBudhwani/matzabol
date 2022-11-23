<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    //
    use softdeletes;

    protected $fillable = [
        'id',
        'name',
        'day',
        'time',
        'date',
        'description',
        'image',
    ];
}