<?php

namespace Domains\Transport\Actions;

use Domains\Transport\Dtos\TransportData;
use Domains\Transport\Models\Transport;

class TransportCreator
{
    public function create(TransportData $transportData)
    {
        $transport = Transport::create($transportData->all());
    }
}
