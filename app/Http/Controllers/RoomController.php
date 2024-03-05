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
            "rooms" => Room::with("image", "zones")->paginate(6),
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

        return redirect()->back()->with("success", "room created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view ("admin.single-room", [
            "room" => $room
        ]);
    }

}
