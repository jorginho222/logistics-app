<?php

namespace Domains\Owner\Models;

use Domains\Transport\Models\Transport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Owner extends Model
{
    public function transport(): HasOne
    {
        return $this->hasOne(Transport::class);
    }
}
