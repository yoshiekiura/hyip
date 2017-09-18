<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
    public $fillable=[
        'user_id',
        'user_ref',
        'user_from',
        'user_ref_name',
        'level',
        'earned',
    ];

    public $timestamps = true;
    public $table='referrals';
}