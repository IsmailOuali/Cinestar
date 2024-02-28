<?php

namespace App\Services;

use App\Enums\Message;
use App\Models\Booking;
use App\Models\FilmRoom;
use App\Models\Notification;

/**
 * Class SendNotificationService.
 */
class SendNotificationService extends SendMessageService
{
    public function sendNotification(FilmRoom $schedule, Message $message)
    {
        $notifications = $this->createMessages($schedule, $message);
        if ($notifications) {
            Notification::insert($notifications);
        }
    }


}
