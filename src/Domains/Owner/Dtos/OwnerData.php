<?php

namespace Domains\Owner\Dtos;

use Spatie\LaravelData\Data;

class OwnerData extends Data
{
    public function __construct(
        public string $uuid,
        public string $firstName,
        public string $lastName,
        public int $workShiftFrom,
        public int $workShiftTo
    )
    {
    }

    public function rules(): array
    {
        return [
            'uuid' => ['required', 'string', 'uuid'],
            'firstName' => ['required', 'string', 'max:25'],
            'lastName' => ['required', 'string', 'max:25'],
            'workShiftFrom' => ['required', 'numeric', 'between:0,24'],
            'workShiftTo' => ['required', 'numeric', 'between:0,24'],
        ];
    }
}
