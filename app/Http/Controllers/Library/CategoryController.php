<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Libraries\Categories\StoreCategoryRequest;
use App\Http\Requests\Libraries\Categories\UpdateCategoryRequest;
use App\Services\Library\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataTableResponse = $this->categoryService->getForDataTable($request);
            return response()->json($dataTableResponse);
        }

        return view('libraries.categories.categoryList');
    }

    public function show($id)
    {
        $catalogType = $this->categoryService->show($id);

        return response()->json($catalogType);
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->categoryService->store($request->validated());

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function update($id, UpdateCategoryRequest $request)
    {
        $this->categoryService->update($id, $request->validated());

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function delete(int $id)
    {
        $this->categoryService->delete($id);

        return response()->json([
            'message' => 'Catalog Type deleted successfully!'
        ]);
    }
}
