<?php

namespace Domains\Transport\Dtos;

use Domains\Transport\Enums\TransportAvailability;
use Spatie\LaravelData\Data;

class TransportData extends Data
{
    public function __construct(
        public string                 $uuid,
        public string                 $code,
        public float                  $temperature,
        public float                  $capacity,
        public ?bool                  $active,
        public ?TransportAvailability $availability
    )
    {
    }

    public function rules(): array
    {
        return [
            'uuid' => ['required', 'string'],
            'code' => ['required', 'string'],
            'temperature' => ['required', 'numeric', 'between:-30, 30'],
            'capacity' => ['required', 'numeric'],
            'active' => ['nullable', 'boolean'],
            'availability' => ['nullable', 'string'],
        ];
    }
}
