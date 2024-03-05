<?php

namespace App\Services;

use App\Models\Booking;

/**
 * Class SendMessageService.
 */
abstract class SendMessageService
{
    public function createMessages($schedule, $message)
    {
        $idOfMembersToNotify = $this->findScheduleMembers($schedule);
        if (!is_array($idOfMembersToNotify)) {
            return false;
        } else {
            $newNotifications = [];
            foreach ($idOfMembersToNotify as $memberId) {
                $newNotifications[] = [
                    "header" => $message->header()[0],
                    "body" => $message->body()[0],
                    "member_id" => $memberId,
                ];
            }
        }
        return $newNotifications;
    }

    public function findScheduleMembers($schedule): array|bool
    {
        $idOfMembersToNotify = Booking::where("schedule_id", $schedule->id)->pluck("member_id")->toArray();

        if (count($idOfMembersToNotify) < 1) {
            return false;
        }
        return Booking::where("schedule_id", $schedule->id)->pluck("member_id")->toArray();
    }
}
