<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventJoin extends Model
{
    //

    protected $table = 'event_users';
    use softdeletes;

    protected $fillable = [
        'id',
        'user_id',
        'event_id',
    ];
}