<?php

namespace App\Listeners;

use App\Enums\Message;
use App\Events\ScheduleDeletedEvent;
use App\Events\ScheduleUpdatedEvent;
use App\Services\SendMailService;
use App\Services\SendNotificationService;

class SendNotificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct(
        public SendNotificationService $sendNotificationService,
        public SendMailService $sendMailService
    ){}

    /**
     * Handle the event.
     */
    public function handle(ScheduleDeletedEvent|ScheduleUpdatedEvent $event): void
    {
        if (get_class($event) === "App\Events\ScheduleDeletedEvent") {
            $message_type = Message::DELETE;
        } else {
            $message_type = Message::UPDATE;
        }
        $this->sendNotificationService->sendNotification($event->schedule, $message_type);
    }
}
