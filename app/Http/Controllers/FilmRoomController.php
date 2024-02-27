<?php

namespace App\Http\Controllers;

use App\Events\ScheduleDeletedEvent;
use App\Events\ScheduleUpdatedEvent;
use App\Http\Requests\StoreFilmRoomRequest;
use App\Http\Requests\UpdateFilmRoomRequest;
use App\Models\Film;
use App\Models\FilmRoom;
use App\Models\Room;

class FilmRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("admin.schedules", [
                "schedules" => FilmRoom::all(),
                "data" => [
                    "films" => Film::all(),
                    "rooms" => Room::all(),
                ]
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRoomRequest $request)
    {
        $validatedData = $request->validated();
        FilmRoom::create($validatedData);
        return redirect()->back()->with("success", "show added to schedule successfully");

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRoomRequest $request, FilmRoom $filmRoom)
    {
        $validatedData = $request->validated();
        $filmRoom->update([
            "room_id" => $validatedData['room_id'],
            "screening_date" => $validatedData["screening_date"]
        ]);
        ScheduleUpdatedEvent::dispatch($filmRoom);
        return redirect()->back()->with("success", "schedule updated successfullyw");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilmRoom $filmRoom)
    {
        ScheduleDeletedEvent::dispatch($filmRoom);
        $filmRoom->delete();
        return redirect()->back()->with("success", "schedule deleted successfully");
    }
}
