<?php

namespace Domains\Transport\Actions;

use Domains\Transport\Dtos\TransportData;
use Domains\Transport\Models\Transport;

class TransportCreator
{
    public function create(TransportData $transportData): Transport
    {
        return Transport::create($transportData->all());
    }
}
