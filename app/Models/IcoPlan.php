<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IcoPlan extends Model
{
    protected $table = 'ico_plans';

    protected $fillable = ['id', 'start_date', 'end_date', 'coin_token', 'price', 'created_at', 'updated_at'];
}
