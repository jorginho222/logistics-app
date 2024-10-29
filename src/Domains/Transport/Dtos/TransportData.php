<?php

namespace Domains\Transport\Dtos;

use Domains\Transport\Enums\TransportAvailability;
use Spatie\LaravelData\Data;

class TransportData extends Data
{
    public function __construct(
        public string $id,
        public string $code,
        public float $temperature,
        public float $capacity,
        public bool $active,
        public TransportAvailability $availability
    )
    {
    }
}
