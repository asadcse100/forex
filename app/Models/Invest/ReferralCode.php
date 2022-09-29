<?php

namespace App\Models\Invest;

use Illuminate\Database\Eloquent\Model;

class ReferralCode extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'code',
        'type',
        'label'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
