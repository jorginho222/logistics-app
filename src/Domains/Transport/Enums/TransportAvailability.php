<?php

namespace Domains\Transport\Enums;

enum TransportAvailability: string
{
    case AVAILABLE = 'available';
    case BUSY = 'busy';
    case UNAVAILABLE = 'unavailable';
}
