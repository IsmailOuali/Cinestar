<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Category;
use App\Models\Film;
use App\Models\Room;
use App\Services\ImageService;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    private $imageService;
    public function __construct (ImageService $imageService){
        $this->imageService = $imageService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.films", [
            "films" => Film::paginate(7),
            "data" => [
                "categories" => Category::all(),
                "rooms" => Room::all(),
            ]
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $validatedData = $request->validated();
        $film = Film::create($validatedData);
        $imageName = $this->imageService->move($request->file("image"));
        $film->image()->create(["path" => $imageName]);
        return redirect()->back();

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
