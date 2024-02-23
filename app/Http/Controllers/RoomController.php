<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use App\Services\ImageService;
use App\Services\ZoneService;

class RoomController extends Controller
{
    private $zoneService;
    private $imageService;
    public function __construct (ImageService $imageService, ZoneService $zoneService){
        $this->imageService = $imageService;
        $this->zoneService = $zoneService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("admin.rooms", [
            "rooms" => Room::paginate(7),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $validateDdata = $request->validated();
        $room = Room::create($validateDdata);
        $imageName = $this->imageService->move($request->file("image"));
        $room->image()->create(["path" => $imageName]);
        $this->zoneService->storeRoomZones($room, $validateDdata);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
