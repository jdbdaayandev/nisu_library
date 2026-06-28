<?php

namespace App\Http\Controllers;

use App\Http\Requests\Libraries\CatalogTypes\StoreCatalogTypeRequest;
use App\Http\Requests\Libraries\CatalogTypes\UpdateCatalogTypeRequest;
use App\Services\CatalogTypeService;
use Illuminate\Http\Request;

class CatalogTypeController extends Controller
{
    protected $catalogTypeService;

    public function __construct(CatalogTypeService $catalogTypeService)
    {
        $this->catalogTypeService = $catalogTypeService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataTableResponse = $this->catalogTypeService->getForDataTable($request);
            return response()->json($dataTableResponse);
        }

        // 2. Normal page load (Notice we don't need to pass $catalogTypes here anymore)
        return view('libraries.catalog-types.catalogTypeList');

    }

    public function store(StoreCatalogTypeRequest $request)
    {
        $this->catalogTypeService->store($request->validated());

        return redirect()->back()->with('success', 'Catalog Type added successfully!');
    }

    public function show($id)
    {
        $catalogType = $this->catalogTypeService->show($id);

        return response()->json($catalogType);
    }

    public function update($id, UpdateCatalogTypeRequest $request)
    {
        $this->catalogTypeService->update($id, $request->validated());

        return redirect()->back()->with('success', 'Catalog Type updated successfully!');
    }

    public function delete($id)
    {
        $this->catalogTypeService->delete($id);

        return response()->json([
            'message' => 'Catalog Type deleted successfully!'
        ]);
    }
}
