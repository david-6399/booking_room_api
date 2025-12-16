<?php

namespace App\Jobs;

use App\Models\room;
use App\roomStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class changeRoomStatusToAvailableJob implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public int $roomId)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $room = room::find($this->roomId);
        
        if(!$room) {
            return;
        }

        if($room->status !== roomStatus::MAINTENANCE->value) {
            $room->update([
                'status' => roomStatus::AVAILABLE->value
            ]);
        }
    }
}
