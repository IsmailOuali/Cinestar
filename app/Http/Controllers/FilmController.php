<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.films", [
            "films" => Film::paginate(7),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $validatedData = $request->validated();
        $film = Film::create($validatedData);
        return view ("");

    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view("", [
            "film" => $film,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $validatedData = $request->validated();
        $film->fill($validatedData);
        $film->save();
        return view ("");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return view ("");
    }
}
