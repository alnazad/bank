<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
