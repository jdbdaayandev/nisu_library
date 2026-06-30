<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Libraries\Authors\StoreAuthorRequest;
use App\Http\Requests\Libraries\Authors\UpdateAuthorRequest;
use App\Services\Library\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataTableResponse = $this->authorService->getForDataTable($request);
            return response()->json($dataTableResponse);
        }

        return view('libraries.authors.authorList');
    }

    public function show(int $id)
    {
        $author = $this->authorService->show($id);

        return response()->json($author);
    }

    public function store(StoreAuthorRequest $request)
    {
        $this->authorService->store($request->validated());

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function update($id, UpdateAuthorRequest $request)
    {
        $this->authorService->update($id, $request->validated());

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function delete(int $id)
    {
        $this->authorService->delete($id);

        return response()->json([
            'message' => 'Author deleted successfully!'
        ]);
    }
}
