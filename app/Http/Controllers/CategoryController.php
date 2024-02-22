<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Film;
use App\Models\Room;
use App\Services\ImageService;

class CategoryController extends Controller
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
        return view("admin.categories", [
            "categories" => Category::paginate(7),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        $category = Category::create($validatedData);
        $imageName = $this->imageService->move($request->file("image"));
        $category->image()->create(["path" => $imageName]);

        return redirect()->back()->with("success", "category created successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $validatedData = $request->validated();
        $category->update($validatedData);
        if ($request->hasFile("image")) {
            $imageName = $this->imageService->move($request->file("image"));
            $category->image()->update(["path" => $imageName]);
        }
        return redirect()->back()->with("success", "category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with("success", "category deleted successfully");
    }
}
