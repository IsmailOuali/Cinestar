<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Category;
use App\Models\Film;
use App\Services\ImageService;

class FilmController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.films", [
            "films" => Film::with("category", "image")->paginate(10),
            "data" => [
                "categories" => Category::all(),
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        $validatedData = $request->validated();
        $film = Film::create($validatedData);
        if ($request->hasFile("image")) {
            $imageName = $this->imageService->move($request->file("image"));
            $film->image()->create(["path" => $imageName]);
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $validatedData = $request->validated();
        $film->update($validatedData);
        if ($request->hasFile("image")) {
            $imageName = $this->imageService->move($request->file("image"));
            $film->image()->update(["path" => $imageName]);
        }
        return redirect()->back()->with("success", "Film Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->back()->with("success", "Film deleted successfully");
    }
}
