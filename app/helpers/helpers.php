<?php 

// namespace App\Helpers;

use App\Enums\roomStatus;
use App\Enums\bookingStatus;

function detectRoomStatus($roomStatus)
{
    if ($roomStatus instanceof roomStatus) {
        $roomStatus = $roomStatus->value;
    }

    if($roomStatus === RoomStatus::AVAILABLE->value){
        return 'bg-green-100 text-green-700';
    } elseif($roomStatus === roomStatus::OCCUPIED->value){
        return 'bg-red-100 text-red-700';
    }elseif($roomStatus === roomStatus::MAINTENANCE->value){
        return 'bg-yellow-100 text-yellow-700';
    }else{
        return 'bg-gray-100 text-gray-700';
    }
}



function detectBookingStatus($bookingStatus)
{
    if ($bookingStatus instanceof bookingStatus) {
        $bookingStatus = $bookingStatus->value;
    }

    if ($bookingStatus === BookingStatus::CONFIRMED->value) {
        return 'bg-green-100 text-green-700';
    } elseif ($bookingStatus === BookingStatus::PENDING->value) {
        return 'bg-yellow-100 text-yellow-700';
    } elseif ($bookingStatus === BookingStatus::CANCELED->value) {
        return 'bg-red-100 text-red-700';
    } elseif ($bookingStatus === BookingStatus::CHECKED_IN->value) {
        return 'bg-blue-100 text-blue-700';
    } elseif ($bookingStatus === BookingStatus::CHECKED_OUT->value) {
        return 'bg-purple-100 text-purple-700';
    } else {
        return 'bg-gray-100 text-gray-700';
    }
}


function getInitials($text)
{
    $words = explode(' ', trim($text));
    $initials = '';
    
    foreach ($words as $word) {
        if (!empty($word)) {
            $initials .= strtoupper($word[0]);
            if (strlen($initials) === 2) break;
        }
    }
    
    return $initials;
}