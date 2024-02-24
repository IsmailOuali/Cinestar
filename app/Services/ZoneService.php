<?php

namespace App\Services;
use Illuminate\Support\Str;

/**
 * Class ZoneService.
 */
class ZoneService
{
    public function storeRoomZones($room, $zonesData)
    {
        $zones = $this->createZoneData($zonesData, $room->id);
        $room->zones()->insert($zones);
    }

    public function createZoneData($zones, $id)
    {
        $newZones = [];
        for ($i = 0; $i < count($zones["names"]); $i++) {
            $newZones[] = [
                "name" => $zones["names"][$i],
                "number_of_seats" => $zones["number_of_seats"][$i],
                "price" => $zones["prices"][$i],
                "room_id" => $id,
                "slug" => Str::slug($zones["names"][$i]),
            ];
        }
        return $newZones;
    }
}
