<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pardakht extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function ghests()
    {
        return $this->hasMany(Ghest::class);
    }
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    protected $fillable = [
        'customer_id',

    ];
}
