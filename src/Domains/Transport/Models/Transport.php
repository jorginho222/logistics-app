<?php

namespace Domains\Transport\Models;

use Domains\Owner\Models\Owner;
use Domains\Transport\Enums\TransportAvailability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transport extends Model
{
    protected $casts = [
        'availability' => TransportAvailability::class,
    ];

    protected $fillable = [
        'uuid',
        'code',
        'temperature',
        'capacity',
        'active',
        'availability',
        'owner_id',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
