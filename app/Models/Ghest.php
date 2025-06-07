<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ghest extends Model
{
    public function pardakht()
    {
        return $this->belongsTo(Pardakht::class);
    }
}
