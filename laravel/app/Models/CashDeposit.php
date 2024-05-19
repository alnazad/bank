<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashDeposit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}