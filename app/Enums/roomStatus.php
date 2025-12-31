<?php

namespace App\Enums;

enum roomStatus :string
{
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';
    case MAINTENANCE = 'maintenance';
}
