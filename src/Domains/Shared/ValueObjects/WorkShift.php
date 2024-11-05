<?php

namespace Domains\Shared\ValueObjects;

class WorkShift
{
    public function __construct(
        private int $from,
        private int $to
    )
    {
        $this->validateWorkShift();
    }

    private function validateWorkShift()
    {
        if ($this->from > $this->to) {
            throw new \Exception('Work shift from cannot be greater than work shift to');
        }
    }

    public function toString(): string
    {
        return "De {$this->from} a {$this->to} hs";
    }
}
