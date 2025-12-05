<?php

namespace App;

enum paymentStatus : string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case FAILED = 'failed'; 
}
