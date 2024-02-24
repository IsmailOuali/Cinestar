<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Models\Zone;

class ZoneController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateZoneRequest $request)
    {
        $validatedData = $request->validated();
        Zone::create($validatedData);
        return redirect()->back()->with("success", "zone created successfully");
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        $validatedData = $request->validated();
        $zone->update($validatedData);
        return redirect()->back()->with("success", "zone update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $zone)
    {
        $zone->delete();
        return redirect()->back()->with("success", "zone deleted successfully");
    }
}
