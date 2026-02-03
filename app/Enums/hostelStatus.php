<?php

namespace App\Enums;

enum hostelStatus: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending= 'pending';
}
