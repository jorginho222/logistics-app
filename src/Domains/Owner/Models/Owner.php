<?php

namespace Domains\Owner\Models;

use Domains\Shared\ValueObjects\PersonFullName;
use Domains\Shared\ValueObjects\PhoneNumber;
use Domains\Shared\ValueObjects\WorkShift;
use Domains\Transport\Models\Transport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Owner extends Model
{
    protected $fillable = [
        'full_name',
        'work_shift',
        'phone_number',
    ];

    protected $casts = [
        'full_name' => PersonFullName::class,
        'work_shift' => WorkShift::class,
        'phone_number' => PhoneNumber::class,
    ];

    public function transport(): HasOne
    {
        return $this->hasOne(Transport::class);
    }
}
