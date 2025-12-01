<?php

namespace App;

enum roomStatus :string
{
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';
    case MAINTENANCE = 'maintenance';
}
