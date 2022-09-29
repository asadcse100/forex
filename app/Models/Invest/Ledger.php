<?php

namespace App\Models\Invest;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    public $timestamps = ["created_at"];
    const UPDATED_AT = null;
    /**
     * @var string[]
     */
    protected $fillable = [
//        'tnx_id',
//        'debit',
//        'credit',
//        'balance',
    ];
}
