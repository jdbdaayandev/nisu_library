<?php

namespace App\Services;

use App\Models\CatalogType;
use Illuminate\Http\Request;

class CatalogTypeService
{
    public function getForDataTable(Request $request)
    {
        $query = CatalogType::query();
        
        $totalRecords = $query->count();
        
        // Handle Search
        if ($search = $request->input('search.value')) {
            $query->where('catalog_name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        }
        
        $filteredRecords = $query->count();
        
        // Handle Sorting
        if ($request->has('order')) {
            $orderColumnIndex = $request->input('order.0.column');
            $orderDirection = $request->input('order.0.dir');
            
            $columns = ['id', 'catalog_name', 'description', 'id']; 
            $query->orderBy($columns[$orderColumnIndex], $orderDirection);
        }
        
        // Handle Pagination
        $query->skip($request->input('start', 0))
              ->take($request->input('length', 10));
              
        // Format the output
        $data = $query->get()->map(function($type) {
            
            $editBtn = '
                <button 
                    type="button" 
                    class="btn btn-sm btn-info mr-1 btn-edit"
                    data-id="'.$type->id.'"
                    title="Edit">
                    <i class="fas fa-edit"></i>
                </button>';
            
            $deleteBtn = '
                    <button 
                        type="button"
                        class="btn btn-sm btn-danger btn-delete"
                        data-id="'.$type->id.'"
                        data-url="/catalog-types/'.$type->id.'"
                        title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>';

            return [
                'id'           => $type->id,
                'catalog_name' => '<strong>' . $type->catalog_name . '</strong>',
                'description'  => '<span class="text-muted">' . $type->description . '</span>',
                'actions'      => $editBtn . $deleteBtn
            ];
        });

        // Return array to the controller
        return [
            'draw'            => intval($request->input('draw')),
            'recordsTotal'    => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data'            => $data
        ];
    }

    public function store(array $data)
    {
        return CatalogType::create([
            'catalog_name' => $data['catalog_name'],
            'description'  => $data['description'] ?? null,
        ]);
    }

    public function show(int $id)
    {
        return CatalogType::find($id);
    }

    public function update(int $id, array $data)
    {
        $catalogType = CatalogType::findOrFail($id);
        $catalogType->update($data);

        return $catalogType;
    }

    public function delete(int $id)
    {
        $catalogType = CatalogType::findOrFail($id);
        return $catalogType->delete();
    }
}