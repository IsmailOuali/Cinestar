<?php

namespace App\Services;

/**
 * Class ZoneService.
 */
class ZoneService
{
    public function storeRoomZones($room, $zonesData)
    {
        $this->createZoneData($zonesData);

    }
    public function createZoneData($zones){
        $newZones = [];
        for ($i = 0; $i < count($zones->names); $i++){
            $newZones = [
                "name" => $zones[$i]["name"],
                "number_of_seats" => $zones[$i]["number_of_seats"],
                "price" => $zones[$i]["price"],
            ];
        }
        dd($newZones);
    }
}
