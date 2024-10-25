<?php

namespace Domains\Transport\Models;

use Domains\Owner\Models\Owner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transport extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    protected $casts = [
        'availability' => TransportAvailability::class,
    ];
}
